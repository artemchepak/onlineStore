<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/categories', [MainController::class, 'categories'])->name('categories');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');

Route::post('/basket/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');

Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');

Route::get('/{category}', [MainController::class, 'category'])->name('category');

Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');
