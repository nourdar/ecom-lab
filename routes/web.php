<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');

Route::get('/product/{productNameVariable}/{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');

