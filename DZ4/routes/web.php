<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home' , [
        'name' => 'John',
        'age' => 10,
        'position' => 'Two',
        'address' => 'Mellow street',
    ]);
});

Route::get('/contacts', function () {
    return view('contacts' , [
        'email' => '',
        'post_code' => 654000,
        'phone' => '88-32-17',
        'address' => 'Mellow street',
    ]);
});
