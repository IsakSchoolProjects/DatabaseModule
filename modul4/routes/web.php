<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index'], [ProductsController::class, 'recentlyAdded']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/store', [ProductsController::class, 'showAllProducts']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('/cart', [ProductsController::class, 'showCartItems']);

Route::get('/remove_cart_item/{cart_item}', [CartController::class, 'remove_cart_item']);
Route::get('/remove_all_cart_items', [CartController::class, 'remove_all_cart_items']);

Route::get('/add_cart_item/{cart_item}', [CartController::class, 'add_cart_item']);

Route::get('/contact', [ProductsController::class, 'contact']);
Route::get('/car/{id}', [PagesController::class, 'car']);
