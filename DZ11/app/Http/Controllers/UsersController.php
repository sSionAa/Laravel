<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Policies\UserPolicy;

use App\Http\Requests\Auth\LoginRequest;

class UsersController extends Controller
{

    public function index(User $user)
    {

        $users = DB::table('users')->get();
        //$users = User::where('is_admin', true)->get()->all();
        // $user->can('viewAny', User::class);
        // echo ($user);
        foreach ($users as $user) {
            $user->name;
           // return $user;
        }

        return $users;


    }
}
