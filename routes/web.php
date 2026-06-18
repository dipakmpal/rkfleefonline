<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaledetailController;
use App\Http\Controllers\Master\CustomerController;
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

Route::get('index', function () {
    return view('index');
});

Route::get('home', function () {
    return view('homepage');
})->name('home');

Route::get('purchase', function () {
    return view('admin.purchaseandsale.purchase');
})->name('purchase');

Route::get('customermaster', [CustomerController::class, 'index'])->name('customer-master');
Route::get('customermaster/create', [CustomerController::class, 'create'])->name('customer-master-create');
Route::post('customermaster/store', [CustomerController::class, 'store'])->name('customer-master-store');


Route::get('sale', [SaledetailController::class, 'index'])->name('sale-bill');
Route::post('salecreate', [SaledetailController::class, 'create'])->name('sale-create');

// Route::post('/submit', [SaledetailController::class, 'submit']);