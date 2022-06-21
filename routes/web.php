<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.cart');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');