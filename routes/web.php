<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\Admin\ServiceImageController;
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
Route::get('/admin/staff/registers/{id}/view', [RegisterController::class, 'view'])->name('admin.staff.register.view');
Route::get('/admin/staff/registers/{id}/edit', [RegisterController::class, 'edit'])->name('admin.staff.register.edit');
Route::put('/admin/staff/registers/{id}', [RegisterController::class, 'update'])->name('admin.staff.register.update');
Route::delete('admin/staff/registers/delete/{id}', [RegisterController::class, 'destroy'])->name('admin.staff.register.destroy');

// admin services images routes

Route::get('/admin/service/images', [ServiceImageController::class, 'index'])->name('admin.service.image.index');
Route::get('/admin/service/image/create', [ServiceImageController::class, 'create'])->name('admin.service.image.create');
Route::post('/admin/service/image/', [ServiceImageController::class, 'store'])->name('admin.service.image.store');
Route::get('/admin/service/image/{id}/view', [ServiceImageController::class, 'view'])->name('admin.service.image.view');
Route::get('/admin/service/image/{id}/edit', [ServiceImageController::class, 'edit'])->name('admin.service.image.edit');
Route::put('/admin/service/image/{id}', [ServiceImageController::class, 'update'])->name('admin.service.image.update');
Route::delete('admin/service/image/delete/{id}', [ServiceImageController::class, 'destroy'])->name('admin.service.image.destroy');







require __DIR__ . '/auth.php';
