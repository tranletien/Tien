<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/trang-chu',[HomeController::class,'index'])->name('site.home');
Route::get('/san-pham',[HomeController::class,'index'])->name('site.product');
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'detail'])->name('site.product.detail');
Route::get('/lien-he',[ContactController::class,'index'])->name('site.contact');
