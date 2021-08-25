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

Route::prefix('auth')->group(function (){
    Route::get('',[\App\Http\Controllers\AuthController::class,'showFormLogin'])->name('showFormLogin');
    Route::get('/welcome',[\App\Http\Controllers\AuthController::class,'welcome'])->name('welcome');
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logOut'])->name('auth.logout');
    Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('auth.login');
});
