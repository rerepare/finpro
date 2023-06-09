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
    return view('layouts.app');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/transaction', [App\Http\Controllers\TransactionController::class,'transaction']);
Route::get('/users', [App\Http\Controllers\UsersController::class,'users']);
Route::get('/login', [App\Http\Controllers\AuthController::class,'login']);
