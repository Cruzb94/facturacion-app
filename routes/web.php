<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\InvoiceController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', ProductsController::class);
Route::get('/list-products', [App\Http\Controllers\ProductsController::class, 'listProducts'])->name('list-products');
Route::get('/confirm-buy/{id}', [App\Http\Controllers\ProductsController::class, 'confirm'])->name('confirm-buy');

Route::post('confirm', [App\Http\Controllers\PurchaseController::class, 'store'])->name('confirm');

Route::get('/purchases', [App\Http\Controllers\PurchaseController::class, 'index'])->name('purchases');

Route::get('/generate-invoice/{user_id}', [App\Http\Controllers\InvoiceController::class, 'generateInvoice'])->name('generate-invoice');

Route::get('/list-invoices', [App\Http\Controllers\InvoiceController::class, 'index'])->name('list-invoices');


Route::get('/invoice/{invoice_id}', [App\Http\Controllers\InvoiceController::class, 'show'])->name('invoice');