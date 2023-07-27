@extends('layout.app')

@section('css')

@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="margin-top: 15px;">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Stok Ürün Girişi</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('stok/stok_ekleme')}}" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">


                                    <div class="form-group">
                                        <label>Ürün Adı </label>
                                        <input type="text" class="form-control" name="urun_isim" id="urun_isim"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tedarikçi</label>
                                        <input type="text" class="form-control" name="tedarikci" id="tedarikci">
                                    </div>

                                    <div class="form-group">
                                        <label>Stok Miktarı</label>
                                        <input type="text" class="form-control" name="stok_miktari" id="stok_miktari">
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Alış Fiyatı </label>


                                        <input type="text" class="form-control" name="urun_alis" id="urun_alis">

                                    </div>
                                    <div class="form-group">
                                        <label>Ürün Satış Fiyatı </label>


                                        <input type="text" class="form-control" name="urun_satis" id="urun_satis">
                                    </div>
                                    <!--
                                <div class="form-group">
                                    <label>Hangi Depo </label>
                                    <input type="email" class="form-control" name="email" id="email" >
                                </div>
-->
                                    <div class="form-group">
                                        <label>Ürün Bilgi </label>
                                        <textarea class="form-control" rows="3" name="urun_detay"
                                                  id="urun_detay"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Cinsi </label>
                                        <select class="form-control" name="urun_cinsi" id="urun_cinsi">
                                            <option value="1">Giyim</option>
                                            <option value="2">Bakliyat</option>
                                            <option value="3">Elektronik</option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>Ürün Birimi </label>
                                        <select class="form-control" name="urun_birimi" id="urun_birimi">
                                            <option value="1">Adet</option>
                                            <option value="2">Kg</option>
                                            <option value="3">Litre</option>

                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Hangi Depo </label>
                                        <select class="form-control" name="hangi_depoda" id="hangi_depoda">
                                            <option value="1">Ana Depo</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>

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
