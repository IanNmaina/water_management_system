<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WaterBillController; // Corrected namespace
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Management
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Client Management
    Route::resource('clients', ClientController::class);

    // Water Bill Management
    Route::prefix('bills')->group(function () {
        Route::get('/', [WaterBillController::class, 'index'])->name('bills.index'); // List all billings
        Route::get('/create', [WaterBillController::class, 'create'])->name('bills.create'); // Show form to create billing
        Route::post('/', [WaterBillController::class, 'store'])->name('bills.store'); // Store a new billing
        Route::get('/{id}', [WaterBillController::class, 'show'])->name('bills.show'); // View invoice for a specific billing
        Route::get('/{id}/edit', [WaterBillController::class, 'edit'])->name('bills.edit');
        Route::put('/{id}', [WaterBillController::class, 'update'])->name('bills.update');
        Route::delete('/{id}', [WaterBillController::class, 'destroy'])->name('bills.destroy'); // Delete a billing
    });
});

// Authentication routes
require __DIR__ . '/auth.php';
