<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QrCodeController;
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

Route::get('/', function() {
    return redirect()->route('index');
});

Route::get('/home', [QrCodeController::class, 'index'])->name('index');
Route::get('/team', [QrCodeController::class, 'team'])->name('team');
Route::get('/premium', [QrCodeController::class, 'show_premium_page'])->name('premium.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/generate', [QrCodeController::class, 'create'])->name('create');
    Route::post('/generate', [QrCodeController::class, 'generate'])->name('generate');
});

Route::prefix('payments')->group(function () {
    Route::post('/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::post('/callback', [PaymentController::class, 'callback']);
    Route::get('/get-user', [PaymentController::class, 'getCurrentUser']);
});


require __DIR__.'/auth.php';
