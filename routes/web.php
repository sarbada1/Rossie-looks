<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\VerificationController;
use App\Livewire\Auth\LoginPage;
use App\Livewire\BookingFormPage;
use App\Livewire\HomePage;
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

Route::get('/', HomePage::class);
Route::get('/login', LoginPage::class);
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/verify-email/{token}', [VerificationController::class, 'verifyEmail'])->name('verify.email');
Route::get('/booking-form', BookingFormPage::class)->name('booking.form');



