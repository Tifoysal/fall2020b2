<?php


use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Backend\CategoryController as BackendCategory;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
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

Route::group(['namespace'=>'Frontend'],function(){
    Route::get('/',[HomeController::class,'home'])->name('frontend');

    Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
    Route::post('/login',[UserController::class,'login'])->name('user.login');
    Route::get('logout',[UserController::class,'logout'])->name('user.logout');
    Route::get('/category-products/{id}',[CategoryController::class,'getProducts'])->name('category.products');
});




Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');



Route::group(['prefix'=>'admin'],function(){

    Route::get('/', function () {
        return view('layouts.home');
    })->name('home');

    Route::group(['prefix'=>'product'],function(){
        //product
        Route::get('/createForm',[ProductController::class,'showForm'])->name('product.form');
        Route::post('/store',[ProductController::class,'storeProduct'])->name('product.store');
        Route::get('/list',[ProductController::class,'showList'])->name('product.list');
        Route::get('/delete/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
        Route::get('/view/{id}',[ProductController::class,'productView'])->name('product.view');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::put('/update/{id}',[ProductController::class,'update'])->name('product.update');


    });

    Route::group(['namespace'=>'Backend'],function(){
        //category
        Route::get('/category/createForm',[BackendCategory::class,'showForm'])->name('category.form');
        Route::post('/category/store',[BackendCategory::class,'storeCategory'])->name('category.store');
        Route::get('/category/list',[BackendCategory::class,'showList'])->name('category.list');
        Route::get('/category/allproducts/{id}',[BackendCategory::class,'getAllProducts'])->name('category.all.products');

    });
});






