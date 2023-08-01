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
                                <h3 class="card-title">Satın Alma İşlemleri</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('alinacakurunler/siparisekle')}}" method="post">

                                {{ csrf_field() }}
                                <div class="card-body">
                                    <input type="hidden" value="{{$urun->id}}" name="id" id="id">
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
                                        <label>Ürün Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" value="{{$urun->urun_adi}}" class="form-control" name="urun_adi" id="urun_adi" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Kodu</label>
                                        <input type="text" value="{{$urun->urun_kodu}}" class="form-control" name="urun_kodu" id="urun_kodu" >
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Tipi</label>
                                        <input type="text" value="{{$urun->urun_tipi}}" class="form-control" name="urun_tipi" id="urun_tipi" >
                                    </div>

                                    <div class="form-group">
                                        <label>Maksimum Stok</label>
                                        <input type="text" value="{{$urun->maks_stok}}" class="form-control" name="maks_stok" id="maks_stok" >
                                    </div>

                                    <div class="form-group">
                                        <label>Depo Miktarı</label>
                                        <input type="text" value="{{$urun->depo_miktar}}" class="form-control" name="depo_miktar" id="depo_miktar">

                                    </div>


                                    <div class="form-group">
                                        <label>Minimum Stok </label>
                                        <input type="text" value="{{$urun->min_stok}}" class="form-control" name="min_stok" id="min_stok" >
                                    </div>




                                    <div class="form-group">
                                        <label>Birim Fiyatı </label>
                                        <input type="text" value="{{$urun->birim_fiyat}}" name="birim_fiyat" id="birim_fiyat" class="form-control">

                                    </div>



                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-success" type="submit">Güncelle</button>
                                    <a href="{{url('alinacakurunler/ekle')}}" class="btn btn-danger" type="submit">Vazgeç</a>
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
