<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home']);
Route::get('/register',[AuthController::class,'register']);
Route::get('/welcome',[AuthController::class,'welcome']);

route::get('/table',function(){
    return view('table');
});
route::get('/datatable',function(){
    return view('data-table');
});