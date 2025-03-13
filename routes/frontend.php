<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', action: [HomeController::class, 'Services'])->name(name: 'services');
Route::get('/about', action: [HomeController::class, 'About'])->name(name: 'about');
Route::get('/our-team', action: [HomeController::class, 'OurTeam'])->name(name: 'our-team');
Route::get('/price', action: [HomeController::class, 'Price'])->name(name: 'price');
Route::get('/working-hour', action: [HomeController::class, 'WorkingHour'])->name(name: 'working-hour');
Route::get('/tesimonial', action: [HomeController::class, 'Teastimonial'])->name(name: 'testimonial');
Route::get('/contact', action: [HomeController::class, 'Contact'])->name(name: 'contact');
