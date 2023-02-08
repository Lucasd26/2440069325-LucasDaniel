<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function () {
    Route::post('/maintenance/{id}/update', [UserController::class, 'update_role']);
    Route::get('/maintenance', [UserController::class, 'maintenance'])->name('maintenance');
    Route::get('/maintenance/{id}', [UserController::class, 'get_role']);
    Route::get('/maintenance/{id}/delete', [UserController::class, 'delete']);
});

Route::middleware('auth')->group(function () {
    Route::post('/profile/update', [UserController::class, 'update']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/item_detail/{id}', [ItemController::class, 'detail']);
    Route::get('/cart/add/{id}', [CartController::class, 'add']);
    Route::get('/cart/delete/{id}', [CartController::class, 'delete']);
    Route::get('/cart/checkout', [CartController::class, 'checkout']);
});
