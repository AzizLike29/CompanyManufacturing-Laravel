<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataProdukController;
use App\Http\Controllers\Admin\DataPenjualanController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//default
Route::get('/', [AppController::class, 'app']);

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('DataProduk', [DataProdukController::class, 'index'])->name('DataProduk.index');
    Route::get('DataPenjualan', [DataPenjualanController::class, 'index'])->name('DataPenjualan.index');
    Route::get('logout', [LogoutController::class, 'index'])->name('logout.index');
});
