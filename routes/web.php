<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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
    return view('layouts.global');
});

// // Route Login
// Route::get('/login', [LoginController::class, 'index']);
Route::resource('/login', LoginController::class);
Route::post('/login', [LoginController::class, 'auth']);

// Route Register
Route::resource('/register', RegisterController::class);
// Route::post('/register', RegisterController::class);

Route::resource('/dashboard', DashboardController::class);
