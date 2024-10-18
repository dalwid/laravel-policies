<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/invoices',          [InvoiceController::class, 'store'])->name('invoice.store');
Route::put('/invoices/{invoice)', [InvoiceController::class, 'update'])->name('invoice.update')
                                                                       ->middleware('can:isAdmin,invoice');
