<?php

use App\Http\Middleware\DataLogger;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([DataLogger::class])->group(function () {
    Route::get('/logs', function () {
        return view('logs');
    });
});