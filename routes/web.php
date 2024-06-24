<?php

use App\Http\Controllers\AdminController;
use Illuminate\support\facades\Route;


Route::get('/home', function () {
    return view('custamer.home');
});


Route::get('/admin',[AdminController::class,'index']);
Route::get('/createadmin', [AdminController::class,'create']);
Route::post('/saveadmin', [AdminController::class,'store']);
