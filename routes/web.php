<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Product;
use App\Models\User;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');

//Route::get('/products', function () {
 //  return view('products');
//});

//Route::get('/product_details', function () {
  //  return view('product_details');
//});

Route::get('/account', function () {
    return view('account');
})->name('account');

//Route::get('/cart', function () {
 //   return view('cart');
//});

Route::resource('/products', ProductController::class);
Route::resource('/users', UserController::class);
Route::get('/admin_products',[ProductController::class,'addProduct'])->middleware('auth');
Route::post('/add-to-cart',[ProductController::class,'addToCart']);
Route::get('/cart',[ProductController::class,'viewCart']);
Route::get('/remove-item/{rowId}',[ProductController::class,'removeitem']);
Route::get('/',[ProductController::class,'home']);
Route::post('/products/validate-amount',[ProductController::class,'validateAmount']);
