<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');
//for product
Route::get('/product/{productNameVariable}/{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');

// for order
Route::get('order-product',[CheckoutController::class,'index'])->name('order-product');
Route::post('order-product/checkout/{order}',[CheckoutController::class,'store'])->name('checkout-store');
//this for chargily 
// Route::get('payment-method',[PaymentController::class,'index'])->name('payment-method');


