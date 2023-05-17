<?php

use App\Models\Magang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagangController;

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/daftarMagang', function () {
    $magang = Magang::all();
    return view('daftarMagang', compact('magang'));
});
Route::get('/tambahData', function () {
    return view('tambahData');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::apiResource('magang', MagangController::class);

Route::get('/titik/json', [MagangController::class, 'titik']);
