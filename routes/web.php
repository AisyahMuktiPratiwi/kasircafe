<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\UserCartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogrController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DoTransactionController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\LaporanKasirController;
use Illuminate\Support\Facades\Route;

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
    return view('/index');
});

Auth::routes();


Route::resource('product', \App\Http\Controllers\ProductController::class)->middleware('auth', 'levelmanager');
Route::get('/product/destroy/{id}',[ProductController::class, 'destroy'])->name('product.destroy');


Route::resource('dashboard',\App\Http\Controllers\DashboardController::class)->middleware('auth', 'levelmanager', 'level','levelkasir');
Route::resource('depan', \App\Http\Controllers\DepanController::class);

Route::resource('cart', \App\Http\Controllers\UserCartController::class)->middleware('auth', 'levelkasir');
Route::get('/delete/{id}',[UserCartController::class, 'destroy'])->name('delete');
Route::resource('order',\App\Http\Controllers\OrderController::class)->middleware('auth', 'levelkasir');
Route::resource('do_transaction', \App\Http\Controllers\DoTransactionController::class)->middleware('auth', 'levelkasir');
Route::resource('invoice',\App\Http\Controllers\InvoiceController::class)->middleware('auth', 'levelkasir');
Route::resource('laporan',\App\Http\Controllers\LaporanKasirController::class)->middleware('auth', 'levelkasir');

Route::resource('activitylog',\App\Http\Controllers\ActivityLogController::class)->middleware('auth', 'levelkasir','level');

Route::resource('user', \App\Http\Controllers\UserController::class)->middleware('auth', 'level');
Route::get('/user/destroy/{id}',[UserController::class, 'destroy'])->name('user.destroy');