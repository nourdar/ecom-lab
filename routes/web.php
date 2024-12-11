<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');

Route::get('/product/{productNameVariable}/{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');


use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MarkController;

Route::get('/products', [ProductController::class, 'prodind']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/marks', [MarkController::class, 'index']);
