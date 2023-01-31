<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
//user
Route::get('/home',[UserController::class, 'index'])->name('home');
Route::get('/contact',[UserController::class, 'contact'])->name('contact');
Route::get('/shop',[UserController::class, 'shop'])->name('shop');
Route::get('/cart',[UserController::class, 'cart'])->name('cart');
Route::get('/about',[UserController::class, 'about'])->name('about');
Route::get('/wishlist',[UserController::class, 'wishlist'])->name('wishlist');


//Admin


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
    Route::post('login', 'AdminController@login');
});
//Route::get('/admin/login',[AdminController::class, 'login'])->name('login');
Route::post('/', [AdminController::class, 'destroy'])->name('logout');
//Route::post('/admin/login',[AdminController::class, 'customlogin'])->name('customlogin');
Route::get('/admin/home',[AdminController::class, 'index'])->name('adminHome');
Route::get('/admin/product',[AdminController::class, 'product'])->name('product');
Route::get('/admin/productUpload',[AdminController::class, 'productUpload'])->name('productUpload');
Route::get('/admin/category',[AdminController::class, 'category'])->name('category');
Route::get('/admin/categoryUpload',[AdminController::class, 'categoryUpload'])->name('categoryUpload');



