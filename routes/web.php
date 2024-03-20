<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/details', [HomeController::class, 'productDetails']);
Route::get('/product/view-cart', [HomeController::class, 'viewCart']);
