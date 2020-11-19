<?php

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
