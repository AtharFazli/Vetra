<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('frontend.layout.master');
});

Route::prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return view('admin.layout.master');
    })->name('dashboard')->middleware(['auth', 'role:admin,client']);
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/login', [LoginController::class, 'login'])->name('login.login');
Route::post('login/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/register', [RegisterController::class, 'register'])->name('register.register');