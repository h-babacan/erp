@extends('layout.app')

@section('css')

@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('muhasebe/guncelleme')}}" method="post">

                                {{ csrf_field() }}
                                <div class="card-body">
                                    <input type="hidden" value="{{$muhasebe->id}}" name="id" id="id">
                                    @if(session()->get('durum')=='1')
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                            {{session()->get('mesaj')}}
                                        </div>
                                    @endif


                                    @if(session()->get('durum')=='0')
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                                            {{session()->get('mesaj')}}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label>Ad Soyad / Firma Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" value="{{$muhasebe->musteri_adsoyad}}" class="form-control" name="musteri_adsoyad" id="musteri_adsoyad" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tc / Vergi No</label>
                                        <input type="text" value="{{$muhasebe->vergi}}" class="form-control" name="vergi" id="vergi" >
                                    </div>

                                    <div class="form-group">
                                        <label>Vergi Dairesi</label>
                                        <input type="text" value="{{$muhasebe->vergi_dairesi}}" class="form-control" name="vergi_dairesi" id="vergi_dairesi" >
                                    </div>

                                    <div class="form-group">
                                        <label>Telefon <span style="color: red;">(*)</span></label>


                                        <input type="text" value="{{$muhasebe->telefon}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefon" id="telefon">

                                    </div>


                                    <div class="form-group">
                                        <label>E-posta Adresi </label>
                                        <input type="email" value="{{$muhasebe->email}}" class="form-control" name="email" id="email" >
                                    </div>

                                    <div class="form-group">
                                        <label>Adres </label>
                                        <textarea class="form-control" rows="3" name="adres" id="adres">{{$muhasebe->adres}}
                                        </textarea>
                                    </div>



                                    <div class="form-group">
                                        <label>Ürün </label>
                                        <select class="form-control" name="urun" id="urun">
                                            <option @if($muhasebe->urun=='Takı') selected @endif value="Takı">Takı</option>
                                            <option @if($muhasebe->urun=='Giyim') selected @endif value="Giyim">Giyim</option>
                                            <option @if($muhasebe->urun=='Bakliyat') selected @endif value="Bakliyat">Bakliyat</option>
                                            <option @if($muhasebe->urun=='İçecek') selected @endif value="İçecek">İçecek</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label>Adet</label>
                                        <input type="number" value="{{$muhasebe->adet}}" class="form-control" name="adet" id="adet" >
                                    </div>

                                    <div class="form-group">
                                        <label>Birim Fiyat</label>
                                        <input type="number" value="{{$muhasebe->birim_fiyat}}" class="form-control" name="birim_fiyat" id="birim_fiyat" >
                                    </div>


                                    <div class="form-group">
                                        <label>Müşteri tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="musteri_tipi" id="musteri_tipi" required>
                                            <option @if($muhasebe->musteri_tipi=='0') selected @endif value="0">Bireysel Müşteri</option>
                                            <option @if($muhasebe->musteri_tipi=='1') selected @endif value="1">Kurumsal Müşteri</option>
                                            <option @if($muhasebe->musteri_tipi=='2') selected @endif value="2">Filo Müşterisi</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>KDV <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="kdv" id="kdv" required>
                                            <option @if($muhasebe->kdv=='0') selected @endif value="%10">%10</option>
                                            <option @if($muhasebe->kdv=='1') selected @endif value="%18">%18</option>
                                            <option @if($muhasebe->kdv=='2') selected @endif value="%20">%20</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label>Fatura Tarihi</label>
                                        <input type="date" class="form-control" value="{{$muhasebe->fatura_tarihi}}" name="fatura_tarihi" id="fatura_tarihi" >
                                    </div>

                                    <div class="form-group">
                                        <label>Son Ödeme Tarihi:</label>
                                        <input type="date"  class="form-control" value="{{$muhasebe->odeme_tarihi}}" name="odeme_tarihi" id="odeme_tarihi">
                                    </div>


                                    <div class="form-group">
                                        <label>Fatura tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="fatura_tipi" id="fatura_tipi" required>
                                            <option @if($muhasebe->fatura_tipi=='0') selected @endif value="0">Alış</option>
                                            <option @if($muhasebe->fatura_tipi=='1') selected @endif value="1">Satış</option>
                                        </select>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-success" type="submit">Güncelle</button>
                                    <a href="{{url('muhasebe/gelir')}}" class="btn btn-danger" type="submit">Vazgeç <i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a>
                                </div>
                                <!-- /.card-footer-->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection








@section('js')
    <script src="{{asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script>
        $(function () {

            $('[data-mask]').inputmask();


        });
    </script>
@endsection
