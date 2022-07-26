<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',  'App\Http\Controllers\HomeController');

Route::get('users/search', [UserController::class, 'search']) ->name('users.search');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::get('users/create', [UserController::class , 'create'])->name('users.create');
Route::get('controles/create', [ControlController::class , 'create'])->name('controlers.create');
Route::resource('controles', 'App\Http\Controllers\ControlController');

Route::get('/home', function () {
    return view('home');
});







