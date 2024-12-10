<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function(){
    return view ('shop.index');
});
*/

//Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('home');
//Route::get('/about', [\App\Http\Controllers\WecolmeController::class, 'about'])->name('about');
//Route::get('/contact', [\App\Http\Controllers\WecolmeController::class, 'contact'])->name('contact');
//Route::post('/contact', [\App\Http\Controllers\WecolmeController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/product?{productNameVariable}?{productDescr}?{productPrice}', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');
Route::get('/', [\App\Http\Controllers\WecolmeController::class, 'index'])->name('shop-index');
Route::get('/product', [\App\Http\Controllers\WecolmeController::class, 'product'])->name('product-page');
Route::get('/about', [\App\Http\Controllers\WecolmeController::class, 'about'])->name('about-page');
Route::get('/contact', [\App\Http\Controllers\WecolmeController::class, 'contact'])->name('contact-page');
Route::get('/404', [\App\Http\Controllers\WecolmeController::class, 'notFound'])->name('404-error');
Route::get('/shop', [\App\Http\Controllers\WecolmeController::class, 'shop'])->name('shop-page');
Route::get('/cart', [\App\Http\Controllers\WecolmeController::class, 'cart'])->name('cart-page');
Route::get('/checkout', [\App\Http\Controllers\WecolmeController::class, 'checkout'])->name('checkout-page');
Route::get('/news', [\App\Http\Controllers\WecolmeController::class, 'news'])->name('news-page');
Route::get('/single-news', [\App\Http\Controllers\WecolmeController::class, 'singleNews'])->name('singleNews-page');


