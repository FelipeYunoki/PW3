<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}', [ProductController::class, 'show'])->where('id', '[0-9]{1,5}')->name('product.show');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->where('id', '[0-9]{1,5}')->name('product.edit');

Route::put('/product/{id}', [ProductController::class, 'update'])->where('id', '[0-9]{1,5}')->name('product.update');