<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\support\facades\Route;


Route::get('/home', function () {
    return view('custamer.home');
});


Route::get('/admin',[AdminController::class,'index']);
Route::get('/createadmin', [AdminController::class,'create']);
Route::post('/saveadmin', [AdminController::class,'store']);
Route::get('editadmin/{id}', [AdminController::class,'edit']);
Route::put('updateadmin/{id}', [AdminController::class,'update']);
Route::get('deleteadmin/{id}', [AdminController::class,'destroy']);

Route::get('/product',[ProductController::class,'index']);
Route::get('/createproduct', [ProductController::class,'create']);
Route::post('/saveproduct', [ProductController::class,'store']);
Route::get('editproduct/{id}', [ProductController::class,'edit']);
Route::put('updateproduct/{id}', [ProductController::class,'update']);
Route::get('deleteproduct/{id}', [ProductController::class,'destroy']);
