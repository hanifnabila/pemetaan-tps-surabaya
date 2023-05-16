<?php

use App\Http\Controllers\TpsController;
use App\Http\Controllers\MagangController;
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
Route::get('/daftarMagang', function () {
    return view('daftarMagang');
});
Route::get('/tambahData', function () {
    return view('tambahData');
});
Route::get('/maps', function () {
    return view('maps');
});
