<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('layouts.home');
})->name('home');

//product
Route::get('/product/createForm',[ProductController::class,'showForm'])->name('product.form');
Route::post('/product/store',[ProductController::class,'storeProduct'])->name('product.store');
Route::get('/product/list',[ProductController::class,'showList'])->name('product.list');
Route::get('/product/delete/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
Route::get('/product/view/{id}',[ProductController::class,'productView'])->name('product.view');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

//category
Route::get('/category/createForm',[CategoryController::class,'showForm'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'storeCategory'])->name('category.store');
Route::get('/category/list',[CategoryController::class,'showList'])->name('category.list');
