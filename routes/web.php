<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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

require __DIR__ . '/auth.php';

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'general'])->name('profile');
    Route::post('/profile/save', [ProfileController::class, 'save'])->name('profile.save');
});

Route::prefix('settings')->name('setting.')->middleware('auth')->group(function () {
    Route::get('/auth', [SettingController::class, 'auth'])->name('auth');
    Route::post('/save', [SettingController::class, 'save'])->name('save');
});
