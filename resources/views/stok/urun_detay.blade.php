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
                                <h3 class="card-title">{{title}}</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="urun_card" id="urun_card">
                                    <div class="urun_adi" ><labe>Ürün Adı</labe></div>
                                    <div class="urun_detay"><labe>ürün detay</labe></div>
                                    <div><labe>stok miktarı</labe></div>
                                    <div><labe>tedarikçi</labe></div>
                                    <div><labe>ürün alış</labe> <labe>ürün satış</labe> <labe>üründen edilen kar</labe></div>
                                    <div><labe>hangi depoda</labe></div>
                                    <div><labe>ürün cinsi</labe></div>
                                    <div><labe>ürün birimi</labe></div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
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
