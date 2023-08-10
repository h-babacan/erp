<?php

use App\Http\Controllers\MuhasebeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\FaturaController;
use App\Http\Controllers\PdfController;

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
    return view('anasayfa');
});


Route::get('/musteriler/ekle', [MusteriController::class,'ekle']);
Route::post('/musteriler/ekleme', [MusteriController::class,'ekleme']);

Route::get('/musteriler/liste', [MusteriController::class,'listele']);
Route::get('/musteriler/dataliste', [MusteriController::class,'dataliste']);
Route::post('musteriler/listeyigetir',[MusteriController::class,'listeyigetir']);

Route::get('/musteriler/duzenle/{id}', [MusteriController::class,'duzenle']);
Route::post('/musteriler/guncelleme', [MusteriController::class,'guncelleme']);



Route::post('/musteriler/listedata', [MusteriController::class,'listedata']);

Route::get('/muhasebe/gelir', [MuhasebeController::class,'gelir']);
Route::get('/muhasebe/gider', [MuhasebeController::class,'gider']);
Route::get('/muhasebe/kesim', [MuhasebeController::class,'kesim']);
Route::get('/muhasebe/liste', [MuhasebeController::class,'liste']);
Route::get('/muhasebe/maas', [MuhasebeController::class,'maas']);
Route::get('/muhasebe/print', [MuhasebeController::class,'print']);
Route::post('/muhasebe/datagelir', [MuhasebeController::class,'datagelir']);

Route::post('/muhasebe/gelirekle', [MuhasebeController::class,'gelirekle']);

Route::get('/muhasebe/pdf/{id}', [PdfController::class, 'document']);
Route::get('/pdf/pdf1', [PdfController::class, 'goruntule']);
Route::get('/pdf/pdf2', [PdfController::class, 'document']);
Route::post('/muhasebe/gelirler', [MuhasebeController::class,'gelirekle']);
Route::post('muhasebe/listeyigetir',[MuhasebeController::class,'listeyigetir']);

Route::get('/muhasebe/duzenle/{id}', [MuhasebeController::class,'duzenle']);
Route::post('/muhasebe/guncelleme', [MuhasebeController::class,'guncelleme']);
Route::get('/muhasebe/sil/{id}', [MuhasebeController::class,'silme']);


Route::post('muhasebe/listeyigetir',[MusteriController::class,'listeledata']);

Route::get('/muhasebe/gelir', [MuhasebeController::class,'listeyap']);


Route::get('/muhasebe/sil/{id}', [MuhasebeController::class,'silsa']);

Route::get('/muhasebe/onizle/{id}', [MuhasebeController::class,'onizle']);
//Route::post('/muhasebe/onizle_yazdir', [MuhasebeController::class,'onizle_yazdir']);
Route::get('/muhasebe/print/{id}', [MuhasebeController::class,'print']);







