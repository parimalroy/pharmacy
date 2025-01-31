<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;

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