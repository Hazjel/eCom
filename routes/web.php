<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\UserController;
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

route::get('/login', [AuthController::class, 'loginPage'])->name('login');
route::post('/login', [AuthController::class, 'checkLogin'])->name('login-store');
route::get('/register', [AuthController::class, 'registerPage'])->name('register');
route::post('/register', [AuthController::class, 'register'])->name('register-store');
route::get('/resetPassword', [AuthController::class, 'resetPasswordPage'])->name('reset-password');

route::get('/products', [ProductController::class, 'products'])->name('products');
route::post('/products', [ProductController::class, 'store'])->name('store');

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/user/{id}', [UserController::class, 'index'])->name('user.dashboard.index');
        Route::get('/admin/{id}', [AdminController::class, 'index'])->name('admin.dashboard.index');
    });
});
