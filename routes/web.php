<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog-details', [App\Http\Controllers\BlogController::class, 'blog_details'])->name('blog-details');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/shop-details/{id}', [App\Http\Controllers\ShopGridController::class, 'shop_details'])->name('shop-details');
Route::get('/shop-grid', [App\Http\Controllers\ShopGridController::class, 'index'])->name('shop-grid');
Route::get('/shoping-cart', [App\Http\Controllers\ShopingCartController::class, 'index'])->name('shoping-cart');
Route::get('/shop-grid/{id}', [App\Http\Controllers\ShopGridController::class, 'shop_grid'])->name('shop-grid');

Route::get('/add-cart', [App\Http\Controllers\ShopingCartController::class, 'add_cart'])->name('add-cart');
Route::get('/cart/delete', [App\Http\Controllers\ShopingCartController::class, 'delete_cart'])->name('delete-cart');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
