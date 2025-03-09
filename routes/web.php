<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/search',[ SearchController::class , 'index']);

Route::get('/product-details/{id}', [ProductDetailController::class,'index']);

Route::get('/article/{id}', [NewsDetailController::class, 'index']);
