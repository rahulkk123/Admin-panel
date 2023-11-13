<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
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

Route::get('/', function () {
    return view('welcome');
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
//user
























Route::get('/',[UserController::class,'index'])->name('/');
Route::get('user_login',[UserController::class,'user_login']);

Route::post('validate.login',[UserController::class,'login'])->name('validate');
//registration

Route::get('registration',[UserController::class,'reg_login'])->name('user.registration');

Route::post('user_registration',[UserController::class,'Register'])->name('validate.Register');