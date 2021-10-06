<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('invoices', InvoiceController::class)->middleware(['auth']);
    Route::get('/seeAllInvoice', [InvoiceController::class, 'seeAllInvoice'])->name('seeAllInvoice');
    Route::post('/saveRedis', [InvoiceController::class, 'saveRedis'])->name('saveRedis');
    Route::post('/calculation', [InvoiceController::class, 'calculation'])->name('calculation');
    Route::get('/invoiceList', [InvoiceController::class, 'invoiceList'])->name('invoiceList');
});


