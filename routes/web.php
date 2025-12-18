<?php

use App\Http\Controllers\CarInquiryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/car-inquiry', [CarInquiryController::class, 'store'])->name('car-inquiry.store');

