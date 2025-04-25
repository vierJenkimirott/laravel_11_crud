<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
 return view('welcome');
});
Route::resource('/products', ProductController::class);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/staff-login', [LoginController::class, 'authenticate']);