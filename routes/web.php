<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\StaffController;
use App\Http\Controllers\Web\Backend\CustomerController;
use App\Http\Controllers\Web\Backend\Staff\RegisterController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//staff register route

Route::get('/admin/staff/registers', [RegisterController::class, 'index'])->name('admin.staff.register.index');
Route::get('/admin/staff/registers/create', [RegisterController::class, 'create'])->name('admin.staff.register.create');
Route::post('/admin/staff/registers', [RegisterController::class, 'store'])->name('admin.staff.register.store');
Route::get('/admin/staff/registers/{id}', [RegisterController::class, 'show'])->name('admin.staff.register.show');
Route::get('/admin/staff/registers/{id}/edit', [RegisterController::class, 'edit'])->name('admin.staff.register.edit');
Route::put('/admin/staff/registers/{id}', [RegisterController::class, 'update'])->name('admin.staff.register.update');
Route::delete('/admin/staff/registers/{id}', [RegisterController::class, 'destroy'])->name('admin.staff.register.destroy');






require __DIR__ . '/auth.php';