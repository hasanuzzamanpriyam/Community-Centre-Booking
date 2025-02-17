<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('booking', [AdminController::class, 'store'])->name('booking.store');
Route::get('booking_list', [AdminController::class, 'index'])->name('booking.list');
Route::get('booking_edit/{id}', [AdminController::class, 'edit'])->name('booking.edit');
Route::post('booking_update/{id}', [AdminController::class, 'update'])->name('booking.update');
Route::get('booking_delete/{id}', [AdminController::class, 'destroy'])->name('booking.delete');


Route::get('/', [BookingController::class, 'index'])->name('/');
Route::get('/filterByDate', [BookingController::class, 'filterByDate'])->name('filterByDate');

require __DIR__ . '/auth.php';
