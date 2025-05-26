<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('firstname') and $request->has('surname')) {
            dump($request->input('firstname'));
            dump($request->input('surname'));
            dump($request->input('email'));
        }
        
        return view('userform');
    }

    public function store(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('surname');
        $email = $request->input('email');
        $data = [
            'firstname' => $firstName,
            'surname' => $lastName,
            'email' => $email,
        ];

        //return response()->json($data);
        return redirect()->route('hello', ['firstname' => $firstName]);
    }

    public function hello($firstname)
    {
        return view('hello', ['firstname' => $firstname]); // передаем имя в представление
    }

}
