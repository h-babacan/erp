@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/plugins/inputmask/jquery.inputmask.min.css')}}">
@endsection

@section('content')
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Satın Alma İşlemleri</title>
    </head>
    <body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Satın Alma İşlemleri</h3>
                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('/satinal/ekleme')}}" method="post" id="satinalForm">
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
                                        <input type="number" value="{{$urun->urun_kodu}}" class="form-control" name="urun_kodu" id="urun_kodu"required >
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Tipi</label>
                                        <input type="text" value="{{$urun->urun_tipi}}" class="form-control" name="urun_tipi" id="urun_tipi" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Tedarikçisi</label>
                                        <input type="text" value="{{$urun->urun_tedarikcisi}}" class="form-control" name="urun_tedarikcisi" id="urun_tedarikcisi" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Maksimum Stok</label>
                                        <input type="number" value="{{$urun->maks_stok}}" class="form-control" name="maks_stok" id="maks_stok" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Depo Miktarı</label>
                                        <input type="number" value="{{$urun->depo_miktar}}" class="form-control" name="depo_miktar" id="depo_miktar"required>
                                    </div>

                                    <div class="form-group">
                                        <label>Birim</label>
                                        @if($urun->birim=='0')
                                            <input type="text" value="KG" class="form-control" name="birim" id="birim" readonly>
                                        @endif

                                        @if($urun->birim=='1')
                                            <input type="text" value="ADET" class="form-control" name="birim" id="birim" readonly>
                                        @endif

                                        @if($urun->birim=='2')
                                            <input type="text" value="Litre" class="form-control" name="birim" id="birim" readonly>
                                        @endif


                                    </div>

                                    <div class="form-group">
                                        <label>Minimum Stok </label>
                                        <input type="number" value="{{$urun->min_stok}}" class="form-control" name="min_stok" id="min_stok" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Birim Fiyatı </label>
                                        <input type="number" value="{{$urun->birim_fiyat}}" name="birim_fiyat" id="birim_fiyat" class="form-control"required>
                                    </div>

                                    <div class="form-group">
                                        <label>Alınması Gereken Miktar <br>(Önerilen) </label>
                                        <input type="number" value="{{$urun->alinacak_miktar}}" name="alinacak_miktar" id="alinacak_miktar" class="form-control"required>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker">Satın Alınan Tarih</label>
                                        <input type="text" class="form-control" name="satin_alinan_tarih" id="satin_alinan_tarih">
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker">İstenilen Teslim Tarihi</label>
                                        <input type="text" class="form-control" name="istenilen_teslim_tarihi" id="istenilen_teslim_tarihi">
                                    </div>

                                    <div class="form-group">
                                        <label>Ödenecek Miktar </label>
                                        <input type="number" value="{{$urun->birim_fiyat * $urun->alinacak_miktar}}" name="odenecek_tutar" id="odenecek_tutar" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Not <span style="color: red;">(*)</span></label>
                                        <input type="text" value="{{$urun->notlar}}" class="form-control" name="notlar" id="notlar" required>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" type="button" id="kaydetButton">Satın Al</button>
                                    <a href="{{url('alinacakurunler/liste')}}" class="btn btn-danger" type="submit">Vazgeç</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection

    @section('js')
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(function () {

                $('[data-mask]').inputmask();


            });
        </script>
        <script>
            $(function() {
                // Satın alınan tarih seçimi
                $('#satin_alinan_tarih, #istenilen_teslim_tarihi').datepicker({
                     dateFormat: 'yy/mm/dd', // Satın alınan tarih biçimi
                     minDate: 0 // Bugünden önceki tarihleri devre dışı bırak
                 });





                // Alınacak miktar ve birim fiyat değiştiğinde ödenecek tutarı hesapla
                $('#alinacak_miktar, #birim_fiyat').on('input', function() {
                    let alinacakMiktar = $('#alinacak_miktar').val();
                    let birimFiyat = $('#birim_fiyat').val();
                    let odenecekTutar = alinacakMiktar * birimFiyat;
                    $('#odenecek_tutar').val(odenecekTutar);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#kaydetButton").click(function() {
                    Swal.fire({
                        title: 'Bu Ürünü Satın Almak İstiyor Musunuz?',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Satın Al',
                        denyButtonText: `Satın Alma`,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Kaydetme işlemi için formu gönder
                            $("#satinalForm").submit();
                        } else if (result.isDenied) {
                            Swal.fire('Ürün Satın Alınmadı', '', 'info');
                        }
                    });
                });
            });
        </script>
@endsection
