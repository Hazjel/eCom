<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeControlller::class, 'home'])->name('home');
Route::get('/about', [HomeControlller::class, 'about'])->name('about');
route::get('/search', [HomeControlller::class, 'search'])->name('search');

route::get('/login', [AuthController::class, 'login'])->name('login');

route::get('/register', [AuthController::class, 'register'])->name('register');

route::get('/resetPassword', [AuthController::class, 'resetPassword'])->name('reset-password');

route::get('/products', [ProductController::class, 'products'])->name('products');
