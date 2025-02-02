<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/register' , [AuthController::class , 'register']);
Route::post('/submit-register' , [AuthController::class,'submitRegister'])->name('register');
Route::get('/login' , [AuthController::class,'login'])->name('login');
Route::post('/submit-login' , [AuthController::class , 'submitLogin']);

Route::get('/' , [HomeController::class , 'index'])->middleware('auth');
