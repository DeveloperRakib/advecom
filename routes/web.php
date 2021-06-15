<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;


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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('fontend');

//admin Route
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'admin'], function(){
Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
//// edit Profile
Route::get('dashboard.edit_profile',[AdminController::class,'editProfile'])->name('edit.profile');
Route::post('update',[AdminController::class, 'update'])->name('profile.update');
Route::get('image',[AdminController::class, 'image'])->name('admin.image');
});

//User Route
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'user'], function(){
    Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');

    Route::post('update',[UserController::class, 'update'])->name('user.update');
    Route::get('image',[UserController::class, 'image'])->name('user.image');
    Route::post('image.change',[UserController::class, 'imageChange'])->name('image.change');
    Route::get('update.passowrd',[UserController::class, 'updatePassowrd'])->name('update.passowrd');
    Route::post('change.passowrd',[UserController::class, 'changePassowrd'])->name('change.passowrd');
});
