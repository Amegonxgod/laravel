<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UserController;

Route::get('/user/{id?}', [UserController::class, 'show']);
