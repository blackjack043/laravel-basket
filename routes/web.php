<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;
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

Route::get('/',  [ProductController::class, 'tovar'])->name('tovar');
Route::get('/basket/index',  [BasketController::class, 'index'])->name('basketindex');
Route::get('/create',  [ProductController::class, 'createpage']);
Route::post('/create',  [ProductController::class, 'create'])->name('createtovar');

Route::post('/basket/add/{id}',  [BasketController::class, 'add'])
    ->where('id', '[0-9]+')
    ->name('basketadd');

    