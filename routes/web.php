<?php

use App\Models\Magang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MapsController;

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

// Route::get('/geojson-data', 'GeoJSONController@getData');

Route::apiResource('maps', MapsController::class);
