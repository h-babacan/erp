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
                                <h3 class="card-title">Yeni Müşteri Ekleme</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('musteriler/ekleme')}}" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">

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
                                        <input type="text" class="form-control" name="musteri_adsoyad" id="musteri_adsoyad" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tc / Vergi No</label>
                                        <input type="text" class="form-control" name="tc" id="tc" >
                                    </div>

                                    <div class="form-group">
                                        <label>Vergi Dairesi</label>
                                        <input type="text" class="form-control" name="vergi_dairesi" id="vergi_dairesi" >
                                    </div>

                                    <div class="form-group">
                                        <label>Telefon <span style="color: red;">(*)</span></label>


                                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefon" id="telefon">

                                    </div>


                                    <div class="form-group">
                                        <label>Eposta adresi </label>
                                        <input type="email" class="form-control" name="email" id="email" >
                                    </div>

                                    <div class="form-group">
                                        <label>Adres </label>
                                        <textarea class="form-control" rows="3" name="adres" id="adres"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Doğum Tarihi </label>
                                        <input type="text" name="dogum_tarihi" id="dogum_tarihi" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>

                                    </div>

                                    <div class="form-group">
                                        <label>Cinsiyet </label>
                                        <select class="form-control" name="cinsiyet" id="cinsiyet">
                                            <option value="Erkek">Erkek</option>
                                            <option value="Kadın">Kadın</option>
                                            <option value="Diğer">Diğer</option>
                                            <option selected value="Berlirtmek İstemiyorum">Berlirtmek İstemiyorum</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label>Müşteri tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="musteri_tipi" id="musteri_tipi" required>
                                            <option selected value="0">Bireysel Müşteri</option>
                                            <option value="1">Kurumsal Müşteri</option>
                                            <option value="2">Filo Müşterisi</option>

                                        </select>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Kaydet</button>
                                    <a href="#" class="btn btn-danger" type="submit">Vazgeç</a>
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
