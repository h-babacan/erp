@extends('layout.app')


@section('css')

@endsection

@section('content')


    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="margin-top: 15px;">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Urun gorunum</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>


                                <div class="card-body">

                                    <input type="hidden" value="{{$stok->idstok}}" name="idstok" id="idstok">
<!--                                    @if(session()->get('durum')=='1')
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
                                        <labe>Urun isim</labe>
                                        <input type="text" value="{{$stok->urun_isim}}" class="form-control" name="urun_isim" id="urun_isim" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>Urun detay</labe>
                                        <input type="text" value="{{$stok->urun_detay}}" class="form-control" name="urun_detay" id="urun_detay" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>Stok miktari</labe>
                                        <input type="text" value="{{$stok->stok_miktari}}" class="form-control" name="stok_miktari" id="stok_miktari" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>tedarikci</labe>
                                        <input type="text" value="{{$stok->tedarikci}}" class="form-control" name="tedarikci" id="tedarikci" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>urun alis</labe>
                                        <input type="text" value="{{$stok->urun_alis}}" class="form-control" name="urun_alis" id="urun_alis" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>urun satis</labe>
                                        <input type="text" value="{{$stok->urun_satis}}" class="form-control" name="urun_satis" id="urun_satis" ></input>
                                    </div>

                                    <div class="form-group">
                                        <labe>hangi depoda</labe>
                                        <select class="form-control" name="hangi_depo" id="hangi_depo">
                                            <option @if($stok->hangi_depo=="1") selected @endif value="1">Ana depo</option>
                                            <option @if($stok->hangi_depo=='2') selected @endif value="2">2</option>
                                            <option @if($stok->hangi_depo=='3') selected @endif value="3">3</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <labe>urun cinsi</labe>
                                        <select class="form-control" name="urun_cinsi" id="urun_cinsi">
                                            <option @if($stok->urun_cinsi=="1") selected @endif value="1">Giyim</option>
                                            <option @if($stok->urun_cinsi=='2') selected @endif value="2">Bakliyat</option>
                                            <option @if($stok->urun_cinsi=='3') selected @endif value="3">Elektronik</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <labe>urun birimi</labe>
                                        <select class="form-control" name="urun_birimi" id="urun_birimi">
                                            <option @if($stok->urun_birimi=="1") selected @endif value="1">Adet</option>
                                            <option @if($stok->urun_birimi=='2') selected @endif value="2">KG</option>
                                            <option @if($stok->urun_birimi=='3') selected @endif value="3">Litre</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="card-footer">

                                </div>


                        </div>

                    </div>
-->                    <!-- /.card -->

                    <!--ürün detay kart-->






                </div>
            </div>

        </section>
    </div>
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
