<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
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
//punlic route
Route::get('auth/register' , [AuthController::class , 'register']);
Route::post('auth/submit-register', [AuthController::class , 'createUser']);
Route::get('auth/login', [AuthController::class , 'login'])->name('login');
Route::post('/submit-login', [AuthController::class,'submitLogin']);
//punlic route


//private route
Route::get('/', [HomeController::class , 'index'])
->middleware('auth');

Route::get('/auth/logout' , [AuthController::class,'logout'])
->middleware('auth');

Route::post('/submit-logout',[AuthController::class , 'submitLogout'])
->middleware('auth');

Route::get('/list-category', [CategoryController::class, 'index'])
->middleware('auth');

Route::get('/create-category', [CategoryController::class, 'create'])
->middleware('auth');

Route::post('/submit-category', [CategoryController::class, 'store'])
->middleware('auth');

Route::post('/remove-category/{id}', [CategoryController::class ,'destroy'])
->middleware('auth')->name('category.remove');
//private route


