<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserVationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/', [PageController::class, 'main'])->name('main');
    Route::get('room', [PageController::class, 'room'])->name('room');
    Route::get('contactus', [PageController::class, 'contactus'])->name('contactus');
    Route::get('opportunities', [PageController::class, 'opportunities'])->name('opportunities');
    Route::get('brom/{id}', [PageController::class, 'brom'])->name('brom');
    Route::post('message', [MessageController::class, 'store'])->name('message');


    Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('payment.process');

    Route::get('createRoom/{id}', [ReserVationController::class, 'createRoom'])->name('createRoom');
    Route::post('storeRoom', [ReserVationController::class, 'storeRoom'])->name('storeRoom');

    Route::middleware('role:admin')->group(function () {
        Route::get('message', [MessageController::class, 'index'])->name('index');
        Route::get('/admin', [PageController::class, 'admin'])->name('admin');
        Route::resource('rooms', RoomController::class);
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
