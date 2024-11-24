<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdminProductController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoryController;
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
Route::get('/product/{id}',[ClientShoppingController::class,'productDetail'])->name('product.detail');
Route::get('/search',[ClientShoppingController::class,'search'])->name('product.search');
// @backend route
    // @user login & register 
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/submit-register',[AuthController::class,'submitRegister'])->name('submitRegister');
Route::post('/submit-login',[AuthController::class,'submitLogin'])->name('submitLogin');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/submit-logout',[AuthController::class,'submitLogout'])->name('submitLogout');

Route::middleware(['auth'])->group(function () {
        //@admin dashboard page
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        //@category
    Route::get('/admin/category',[CategoryController::class,'index'])->name('category.view');
    Route::get('/admin/category/add',[CategoryController::class,'addCategory'])->name('category.add');
    Route::post('/admin/category/submit-category',[CategoryController::class,'submitCategory'])->name('category.submit');
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::post('/admin/category/submit-edit',[CategoryController::class,'submitEditCategory'])->name('category.submitEditCategory');
    Route::get('/admin/category/remove/{id}',[CategoryController::class,'removeCategory'])->name('category.remove');
    Route::post('/admin/category/submit-delete',[CategoryController::class,'submitDeleteCategory'])->name('category.submitDeleteCategory');
        //@product
    Route::get('/admin/product',[AdminProductController::class,'index']);
    Route::get('/admin/product/add',[AdminProductController::class,'addProduct']);
});



