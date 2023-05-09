<?php

use App\Http\Controllers\TpsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/daftarTps', function () {
    return view('home');
});
Route::get('/tambahData', function () {
    return view('tambahData');
});

Route::post('/tambah', [TpsController::class, 'store'])->name('tps.store');
Route::get('/data', [TpsController::class, 'index'])->name('tps.index');
Route::resource('/index', TpsController::class);
