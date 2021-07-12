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
    return view('welcome');
});

Auth::routes();

Route::get('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'index'])->name('reset-password');
Route::post('/update-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset'])->name('update-password');

Route::get('/forgot_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'index'])->name('password.reset');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
