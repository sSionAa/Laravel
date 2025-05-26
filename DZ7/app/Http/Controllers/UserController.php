<?php

namespace App\Http\Controllers;
//namespace App\View\Components\Render;

use App\Models\User;
use App\View\Components\Render;
use Illuminate\View\View;
use Illuminate\View\View\Renderer\Renderer;
use Closure;
//use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Controller;


class UserController extends Controller
{
    public function __construct(protected Render $render) 
     {
        // Initialize Render Component
        $this->render = new Render('User', 'components.user');
    }

    public function index(): View|Closure|string
    {
        return $this->render->render();
    }

    public function store(Request $request): View|Closure|string
    {
        try {
            // Set data
            $data = $request->all();
            foreach ($data as $key => $value) {
                $data[$key] = trim($value);
            }
            // Validate
            Validator::make($data, [
                'email' => ['required', 'regex:/^\w{2,}+@\w{2,}+\.\w{2,}+$/i', 'unique:users,email', 'max:255'],
                'password' => ['required', 'min:8', 'max:255'],
                'name' => ['required', 'max:50'],
                'surname' => ['required', 'max:50'],
            ])->validate();
            // Save model
            $model = new User($data);
            return $this->render->render(
                'store',
                (object) ($model->save() ? $model->getAttributes() : ['error' => 'Database error'])
            );
        } catch (ValidationException $e) {
            return $this->render->render(
                'store',
                (object) ['error' => $e->getMessage()]
            );
        }
    }

    public function get(Request $request, $id): View|Closure|string
    {
        try {
            $result = null;
            if ($id === 'all') {
                $model = User::all();
                if ($model) {
                    $result = ['users' => []];
                    foreach ($model->getDictionary() as $value) {
                        $result['users'][] = $value->getAttributes();
                    }
                } else {
                    $result = ['error' => 'Users not found'];
                }
            } else {
                $model = User::query()->where('id', $id)->first();
                $result = $model ? $model->getAttributes() : ['error' => 'User not found'];
            }

            return $this->render->render('store', (object) ($result));
        } catch (ValidationException $e) {
            return $this->render->render(
                'store',
                (object) ['error' => $e->getMessage()]
            );
        }
    }
}