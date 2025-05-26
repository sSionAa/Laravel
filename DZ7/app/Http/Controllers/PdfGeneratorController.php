<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\View\Components\Render;
use Illuminate\Support\Facades\Facade;
use Barryvdh\DomPDF\Facade\Pdf;
use Closure;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PdfGeneratorController extends Controller
{
    public function __construct(Render $render) 
    {
        $this->render = new Render('User', 'components.user');
    }

    public function index(Request $request, int $id): Response|View|Closure|string
    {
        $model = User::query()->where('id', $id)->first();
        if ($model) {
            $data = $model ? $model->getAttributes() : ['error' => 'User not found'];
            $pdf = Pdf::loadView('components.user.resume', $data);
            return $pdf->stream('resume.pdf');
        }
        return $this->render('store', (object)['error' => 'User not found']);
    }
}
