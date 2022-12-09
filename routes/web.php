<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'view'])->name('login.view');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login');

    Route::get('masuk', [RegisterController::class, 'view'])->name('masuk.view');
    Route::post('masuk', [RegisterController::class, 'authenticate'])->name('masuk');
});

Route::middleware('auth')->group(function () {
    Route::delete('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('all-provinsi', function () {
    return view('pages.all-provinsi');
})->name('all-provinsi');

Route::get('all-provinsi2', function () {
    return view('pages.all-provinsi2');
})->name('all-provinsi2');
