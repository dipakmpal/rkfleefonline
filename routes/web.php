<?php

use App\Http\Controllers\Item\ItemgroupController;
use App\Http\Controllers\Item\ItemunitController;
use App\Http\Controllers\Master\AccountController;
use App\Http\Controllers\Master\AccountgroupController;
use App\Http\Controllers\Master\CustomerController;
use App\Http\Controllers\Master\PetrolPumpController;
use App\Http\Controllers\Master\SalaryController;
use App\Http\Controllers\Master\StaffController;
use App\Http\Controllers\Master\SupplierController;
use App\Http\Controllers\MoneyControl\JournalVoucherController;
use App\Http\Controllers\SaledetailController;
use App\Http\Controllers\Tripmanagment\LREntryController;
use App\Http\Controllers\Truck\AddtruckController;
use App\Http\Controllers\Truck\TruckdocumentsController;
use App\Http\Controllers\Truck\TrucktypeController;
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

// sales
Route::get('sale-bill', [SaledetailController::class, 'index'])->name('sale-bill');
Route::get('sale-bill/create', [SaledetailController::class, 'create'])->name('sale-create');

// Customer
Route::get('customermaster', [CustomerController::class, 'index'])->name('customer-master');
Route::get('customermaster/create', [CustomerController::class, 'create'])->name('customer-master-create');
Route::post('customermaster/store', [CustomerController::class, 'store'])->name('customer-master-store');
Route::get('customermaster/edit/{id}', [CustomerController::class, 'edit'])->name('customer-master-edit');
Route::put('customermaster/update/{id}', [CustomerController::class, 'update'])->name('customer-master-update');
Route::delete('customermaster/destroy/{id}', [CustomerController::class, 'destroy'])->name('customer-master-delete');

// suppliers
Route::resource('suppliers', SupplierController::class)->names('suppliers');

// StaffController
Route::resource('staff', StaffController::class)->names('staff');

// petrol pump
Route::resource('petrolpump', PetrolPumpController::class)->names('petrolpump');

// Salary
Route::resource('salary', SalaryController::class)->names('salary');

// Account
    Route::resource('account', AccountController::class)->names('account');

    // Accountgroup
Route::resource('accountgroup', AccountgroupController::class)->names('accountgroup');

// item group
Route::resource('itemgroup', ItemgroupController::class)->names('itemgroup');

// item unit
Route::resource('itemunit', ItemunitController::class)->names('itemunit');

// Accountgroup
Route::resource('accountgroup', AccountgroupController::class)->names('accountgroup');

// add truck
Route::resource('addtruck', AddtruckController::class)->names('addtruck');
// truck types
Route::resource('trucktype', TrucktypeController::class)->names('trucktype');
// truck documents
Route::resource('truckdocument', TruckdocumentsController::class)->names('truckdocument');
// lrentry
Route::resource('lrentry', LREntryController::class)->names('lrentry');
// journal voucher
Route::resource('journalvoucher', JournalVoucherController::class)->names('journalvoucher');

Route::get('item', function () {
    return view('admin.item.itemunit.index');
})->name('item');


Route::get('toll&dieselbudget', function () {
    return view('admin.item.itemunit.index');
})->name('toll&dieselbudget');

// truck
Route::get('truckloanentry', function () {
    return view('admin.item.itemunit.index');
})->name('truckloanentry');
Route::get('truckEMIpayment', function () {
    return view('admin.item.itemunit.index');
})->name('truckEMIpayment');
Route::get('loanstatements', function () {
    return view('admin.item.itemunit.index');
})->name('loanstatements');
Route::get('dieselpurchase', function () {
    return view('admin.item.itemunit.index');
})->name('dieselpurchase');
Route::get('dieselstatements', function () {
    return view('admin.item.itemunit.index');
})->name('dieselstatements');
Route::get('truckmaintenance', function () {
    return view('admin.item.itemunit.index');
})->name('truckmaintenance');

// trip planning
Route::get('tripplanning', function () {
    return view('admin.item.itemunit.index');
})->name('tripplanning');
// billing
Route::get('lrtobill', function () {
    return view('admin.item.itemunit.index');
})->name('lrtobill');
Route::get('billlist', function () {
    return view('admin.item.itemunit.index');
})->name('billlist');

// money control
Route::get('moneyreceipt', function () {
    return view('admin.item.itemunit.index');
})->name('moneyreceipt');
Route::get('moneypaid', function () {
    return view('admin.item.itemunit.index');
})->name('moneypaid');
Route::get('bankcash', function () {
    return view('admin.item.itemunit.index');
})->name('bankcash');
// Route::get('journalvoucher', function () {
//     return view('admin.item.itemunit.index');
// })->name('journalvoucher');
Route::get('fasttagrecharge', function () {
    return view('admin.item.itemunit.index');
})->name('fasttagrecharge');

// Pay roll
Route::get('dayattendance', function () {
    return view('admin.item.itemunit.index');
})->name('dayattendance');

// reports
Route::get('truckstatments', function () {
    return view('admin.item.itemunit.index');
})->name('truckstatments');
// Route::post('/submit', [SaledetailController::class, 'submit']);