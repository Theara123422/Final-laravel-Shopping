<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
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

Route::get('auth/register' , [AuthController::class , 'register']);
Route::post('auth/submit-register', [AuthController::class , 'createUser']);
Route::get('auth/login', [AuthController::class , 'login'])->name('login');
Route::post('/submit-login', [AuthController::class,'submitLogin']);

Route::get('/', [HomeController::class , 'index'])->middleware('auth');

