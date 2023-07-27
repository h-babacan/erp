<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\StokController;



Route::get('/', function () {
    return view('');
});

//musteri
Route::get('/musteriler/ekle', [MusteriController::class,'ekle']);
Route::post('/musteriler/ekleme', [MusteriController::class,'ekleme']);
Route::get('/musteriler/liste', [MusteriController::class,'listele']);

Route::get('/musteriler/dataliste', [MusteriController::class,'dataliste']);
Route::post('musteriler/listeyigetir',[MusteriController::class,'listeyigetir']);

Route::get('/musteriler/duzenle/{id}', [MusteriController::class,'duzenle']);
Route::post('/musteriler/guncelleme', [MusteriController::class,'guncelleme']);
Route::get('/musteriler/sil/{id}', [MusteriController::class,'silme']);

//stok
Route::get('/stok/stok_ekle', [StokController::class,'ekle']);
Route::post('/stok/stok_ekleme', [StokController::class,'ekleme']);
Route::get('/stok/stok_liste', [StokController::class,'liste']);

Route::get('/stok/sil/{id}', [StokController::class,'deleteData']);

Route::get('/stok/urun_detay/{idstok}', [StokController::class,'urun_detay'])->name('urun_detay');
Route::post('/stok/stok_guncelle', [StokController::class,'stok_guncelle']);

Route::get('/stok/urun_gorunum/{idstok}', [StokController::class,'urun_gorunum'])->name('urun_gorunum');
