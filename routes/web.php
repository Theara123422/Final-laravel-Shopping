<?php

use App\Http\Controllers\ProductController;
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
Route::get('/' , [ProductController::class , 'index'] );
Route::get('/create-product' , [ProductController::class , 'createProduct']);
Route::post('/submit-add-product' , [ProductController::class , 'submitCreateProduct']);
Route::get('/edit-product/{id}' , [ProductController::class , 'editProduct']);
Route::post('/submit-edit-product' , [ProductController::class , 'submitEditProduct']);
Route::get('/remove-product/{id}' , [ProductController::class, 'removeProduct']);
