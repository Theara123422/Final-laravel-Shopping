<?php

use App\Http\Controllers\ClientShoppingController;
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
// @frontend route
Route::get('/',[ClientShoppingController::class,'index'])->name('index');
Route::get('/shop',[ClientShoppingController::class,'shops'])->name('shop');
Route::get('/news',[ClientShoppingController::class,'news'])->name('news');

// @backend route

