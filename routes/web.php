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
Route::get('/',[ProductController::class,'index']);

Route::get('/product/add',[ProductController::class,'addProduct']);
Route::post('/product/submit-product' , [ProductController::class,'submitProduct']);
Route::get('/detail/{id}' , [ProductController::class,'detailProduct']);

Route::get('/update/{id}' , [ProductController::class,'updateProduct']);



