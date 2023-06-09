<?php

use App\Models\Magang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagangController;

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tambahData', function () {
    return view('tambahData');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/index', function () {
    return view('index');
});
Route::apiResource('magang', MagangController::class);
Route::get('/titik/json', [MagangController::class, 'titik']);
Route::get('/titik/lokasi/{id}', [MagangController::class, 'lokasi']);
Route::get('/detail/{id}', [MagangController::class, 'showDetail']);
