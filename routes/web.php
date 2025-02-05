<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineStokeController;
use App\Http\Controllers\SupplierController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'auth_home'])->name('auth.home');
Route::get('/remember', [AuthController::class, 'auth_forgot'])->name('auth.forgot');
Route::post('/login', [AuthController::class, 'auth_login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'auth_logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard_home'])->name('dashboard.home')->middleware(['auth', 'is_admin:1']);
Route::get('/customer', [CustomerController::class, 'customer_home'])->name('customer.home')->middleware(['auth', 'is_admin:1']);
Route::get('/customer-create', [CustomerController::class, 'customer_create'])->name('customer.create')->middleware(['auth', 'is_admin:1']);
Route::post('/customer-store', [CustomerController::class, 'customer_store'])->name('customer.store')->middleware(['auth', 'is_admin:1']);
Route::get('/customer-edit/{id}', [CustomerController::class, 'customer_edit'])->name('customer.edit')->middleware(['auth', 'is_admin:1']);
Route::post('/customer-update', [CustomerController::class, 'customer_update'])->name('customer.update')->middleware(['auth', 'is_admin:1']);
Route::post('/customer-delete', [CustomerController::class, 'customer_delete'])->name('customer.delete')->middleware(['auth', 'is_admin:1']);


Route::get('/medicine', [MedicineController::class, 'medicine_home'])->name('medicine.home')->middleware(['auth', 'is_admin:1']);
Route::get('/medicine-create', [MedicineController::class, 'medicine_create'])->name('medicine.create')->middleware(['auth', 'is_admin:1']);
Route::post('/medicine-store', [MedicineController::class, 'medicine_store'])->name('medicine.store')->middleware(['auth', 'is_admin:1']);
Route::get('/medicine-edit/{id}', [MedicineController::class, 'medicine_edit'])->name('medicine.edit')->middleware(['auth', 'is_admin:1']);
Route::post('/medicine-update', [MedicineController::class, 'medicine_update'])->name('medicine.update')->middleware(['auth', 'is_admin:1']);
Route::post('/medicine-trash', [MedicineController::class, 'medicine_trash'])->name('medicine.trash')->middleware(['auth', 'is_admin:1']);


Route::get('/medicinestoke-home', [MedicineStokeController::class, 'medicine_stoke_home'])->name('medicinestoke.home')->middleware(['auth', 'is_admin:1']);
Route::get('/medicinestoke-create', [MedicineStokeController::class, 'medicine_stoke_create'])->name('medicinestoke.create')->middleware(['auth', 'is_admin:1']);
Route::post('/medicinestoke-store', [MedicineStokeController::class, 'medicine_stoke_store'])->name('medicinestoke.store')->middleware(['auth', 'is_admin:1']);


Route::get('/supplier', [SupplierController::class, 'supplier_home'])->name('supplier.home')->middleware(['auth', 'is_admin:1']);
Route::get('/supplier-create', [SupplierController::class, 'supplier_create'])->name('supplier.create')->middleware(['auth', 'is_admin:1']);
Route::post('/supplier-store', [SupplierController::class, 'supplier_store'])->name('supplier.store')->middleware(['auth', 'is_admin:1']);


Route::get('/invoice', [InvoiceController::class, 'invoice_home'])->name('invoice.home')->middleware(['auth', 'is_admin:1']);
Route::get('/invoice-create', [InvoiceController::class, 'invoice_create'])->name('invoice.create')->middleware(['auth', 'is_admin:1']);
Route::post('/invoice-store', [InvoiceController::class, 'invoice_store'])->name('invoice.store')->middleware(['auth', 'is_admin:1']);