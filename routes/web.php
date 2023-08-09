<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\AlinacakUrunlerController;
use App\Http\Controllers\TedarikciController;
use App\Http\Controllers\SatinalController;
use App\Http\Controllers\FullCalendarController;



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
Route::get('/musteriler/sil/{id}', [MusteriController::class,'silme']);
Route::post('/musteriler/listedata', [MusteriController::class,'listedata']);

Route::get('/alinacakurunler/ekle', [AlinacakUrunlerController::class,'ekle']);
Route::post('/alinacakurunler/ekleme', [AlinacakUrunlerController::class,'ekleme']);
Route::get('/alinacakurunler/liste', [AlinacakUrunlerController::class,'dataliste']);
Route::post('alinacakurunler/listeyigetir',[AlinacakUrunlerController::class,'listeyigetir']);
Route::get('/alinacakurunler/duzenle/{id}', [AlinacakUrunlerController::class,'duzenle']);
Route::post('/alinacakurunler/guncelleme', [AlinacakUrunlerController::class,'guncelleme']);

Route::get('/alinacakurunler/satinal',[SatinalController::class,'ekle']);
Route::post('/satinal/ekleme', [SatinalController::class,'ekleme']);
Route::post('satinal/listeyigetir',[SatinalController::class,'listeyigetir']);
Route::get('/satinal/dataliste', [SatinalController::class,'dataliste']);



Route::get('/tedarikci/ekle', [TedarikciController::class,'ekle']);
Route::post('/tedarikci/ekleme', [TedarikciController::class,'ekleme']);
Route::post('/tedarikci/dataliste', [TedarikciController::class,'dataliste']);
Route::post('tedarikci/listeyigetir',[TedarikciController::class,'listeyigetir']);
Route::get('/tedarikci/duzenle/{id}', [TedarikciController::class,'duzenle']);
Route::post('/tedarikci/guncelleme', [TedarikciController::class,'guncelleme']);
Route::get('/tedarikci/sil/{id}', [TedarikciController::class,'silme']);




Route::get('/pdf', [PdfController::class,'document']);




Route::get('/takvim',[FullCalendarController::class, 'takvim']);
Route::post('/takvim/ekle',[FullCalendarController::class, 'createEvent']);
Route::post('/takvim/sil',[FullCalendarController::class,'deleteEvent']);

Route::get('/datepicker', function () {
    return view('datepicker');});







