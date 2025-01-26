<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class , 'index']);
Route::get('/create-product' , [ProductController::class , 'create_product']);
Route::post('/submit-product' , [ProductController::class , 'submit_product']);