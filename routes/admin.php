<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.index');
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('login', [DashboardController::class, 'login'])->name('admin.login');
    });
});
