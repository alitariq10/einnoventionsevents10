<?php

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

Route::get('paypal', [App\Http\Controllers\PayPalController::class,'paypal'])->name('paypal');
Route::get('payment', [App\Http\Controllers\PayPalController::class,'payment'])->name('payment');
Route::get('cancel', [App\Http\Controllers\PayPalController::class,'cancel'])->name('payment.cancel');
Route::get('payment/success', [App\Http\Controllers\PayPalController::class,'success'])->name('payment.success');

Route::get('export', [App\Http\Controllers\ImprtExportController::class,'export'])->name('export');
Route::get('importExportView', [App\Http\Controllers\ImprtExportController::class,'importExportView']);
Route::post('import', [App\Http\Controllers\ImprtExportController::class,'import'])->name('import');

Route::get('payments', [App\Http\Controllers\GeoLocationController::class, 'index']);
Route::get('/index', [App\Http\Controllers\ImprtExportController::class, 'view_tiket'])->name('index');
Route::get('/book-ticket', [App\Http\Controllers\IndexController::class, 'bookTicket'])->name('bookticket');
Route::post('/buy-ticket', [App\Http\Controllers\ImprtExportController::class, 'allocate_viewing']);