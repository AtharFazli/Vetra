<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TravelPackController;
use App\Http\Controllers\UserController;
use App\Models\TravelPack;
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
    $travels = TravelPack::orderBy('id', 'asc')->with('gallery')->limit(5)->get();
    return $travels;
    return view('frontend.index', compact('travels'));
});

Route::prefix('dashboard')->middleware(['auth', 'role:admin,staff'])->group(function() {
    Route::get('/', function() {
        return view('admin.layout.index');
    })->name('dashboard');

    Route::resource('user', UserController::class);
    Route::resource('travel', TravelPackController::class);
    Route::resource('gallery', GalleryController::class);
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/login', [LoginController::class, 'login'])->name('login.login');
Route::post('login/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/register', [RegisterController::class, 'register'])->name('register.register');

