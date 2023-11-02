<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('admin/login',[AdminController::class,'Admin_Login']);
Route::get('adminreg',[AdminController::class,'Register'])->name('register');

Route::post('store', [AdminController::class,'Reg_store'])->name('Reg.store');

Route::post('admin_login',[AdminController::class ,'Login'])->name('login');

Route::get('dashboard',[AdminController::class, 'dashboard']);

//Route::get('category',[CategoryController::class ,'cat_create'])->name('category');

//user
Route::get('/',[UserController::class,'index'])->name('/');
Route::get('login',[UserController::class,'user_login']);

Route::post('validate.login',[UserController::class,'login'])->name('validate');
//registration

Route::get('registration',[UserController::class,'reg_login'])->name('registration');

Route::post('login',[UserController::class,'Register'])->name('Register');