<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\User\UserController;


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

Route::get('card', function () {
    return view('user.Cart.products');
});
Route::view('dash','Admin');


Route::get('admin',[AdminController::class,'Admin'])->name('admin');
Route::get('register',[AdminController::class,'Register'])->name('register');

Route::post('admin.login',[AdminController::class,'Admin_login'])->name('Admin.login');
Route::post('store',[AdminController::class,'Reg_store'])->name('Reg.store');
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');


//department//

Route::get('category',[DepartmentController::class ,'create'])->name('category');
Route::post('add-dept',[DepartmentController::class,'add_dept'])->name('add-dept');
Route::get('show-dep',[DepartmentController::class,'show'])->name('show-dep');

Route::get('/dep-edit{id}',[DepartmentController::class,'edit'])->name('dep-edit');
Route::put('/dep-update/{id}',[DepartmentController::class,'update'])->name('dep-update');
Route::get('/dep-delete/{id}',[DepartmentController::class,'distroy'])->name('dep-delete');

//category//
Route::get('add-category',[CategoryController::class ,'cat_create'])->name('add-category');
Route::post('/store-category', [CategoryController::class, 'store' ])->name('store-category');
Route::get('show-category', [CategoryController::class, 'show' ])->name('show-category');
Route::get('/edit-category{id}', [CategoryController::class, 'edit' ])->name('edit-category');
Route::put('/update-category/{id}',[CategoryController::class,'update'])->name('update-category');
Route::get('/delete-category/{id}',[CategoryController::class,'distroy'])->name('delete-category');


//product
Route::get('product',[ProductController::class,'create'])->name('product');
Route::post('add-product',[ProductController::class,'store'])->name('add-product');
Route::get('edit-product{id}',[ProductController::class,'edit'])->name('edit-product');
Route::get('show-product',[ProductController::class,'product'])->name('show-product');

Route::put('/update-product/{id}',[ProductController::class,'update'])->name('update-product');

Route::get('/delete-product/{id}',[ProductController::class,'delete'])->name('delete-product');

//productimage
Route::get('show-productimage',[ProductImageController::class,'index'])->name('show-productimage');


Route::get('/cart{id}', [CartController::class, 'index'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addCart'])->name('add.to.cart');
Route::get('view-cart', [CartController::class, 'cart'])->name('view-cart');
Route::patch('update', [CartController::class, 'update'])->name('update.cart');
Route::delete('delete-cart', [CartController::class,'remove'])->name('cart.remove');

//user



Route::get('',[UserController::class,'index'])->name('homepage');
Route::get('user_login',[UserController::class,'user_login']);

Route::post('validate.login',[UserController::class,'login'])->name('validate');
Route::post('home_login',[UserController::class,'dashboard'])->name('user_validate');
//registration

Route::get('registration',[UserController::class,'reg_login'])->name('user.registration');

Route::post('user_registration',[UserController::class,'Register'])->name('validate.Register');