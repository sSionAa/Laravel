<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('get-employee-data', [EmployeeController::class, 'index'])->name('form');

Route::get('/book{id?}', [BookController::class, 'index'])->name('show_book');

Route::post('/book', [BookController::class, 'store'])->name('store_book');