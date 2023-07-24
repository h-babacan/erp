<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\StokController;

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

Route::get('/', function () {
    return view('welcome');
});

//musteri
Route::get('/musteriler/ekle', [MusteriController::class,'ekle']);
Route::post('/musteriler/ekleme', [MusteriController::class,'ekleme']);
Route::get('/musteriler/liste', [MusteriController::class,'listele']);

//stok
Route::get('/stok/stok_ekle', [StokController::class,'ekle']);
Route::post('/stok/stok_ekleme', [StokController::class,'ekleme']);
Route::get('/stok/stok_liste', [StokController::class,'liste']);
Route::get('/stok/urun_detay/{id}', [StokController::class,'urun_detay'])->name('urun_detay');
