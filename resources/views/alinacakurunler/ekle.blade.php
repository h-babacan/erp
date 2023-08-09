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
                                <h3 class="card-title">Eksik Ürün Ekleme</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('alinacakurunler/ekleme')}}" method="post" id="eksikurunForm">
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
                                        <label>Ürün Adı / Firma Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" class="form-control  @error('urun_adi') is-invalid @enderror" name="urun_adi" id="urun_adi" value="{{ old('urun_adi') }}">
                                        @error('urun_adi')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Kodu</label>
                                        <input type="number" class="form-control @error('urun_kodu') is-invalid @enderror" name="urun_kodu" id="urun_kodu" value="{{ old('urun_kodu') }}">
                                        @error('urun_kodu')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Ürün Tipi</label>
                                        <input type="text" class="form-control @error('urun_tipi') is-invalid @enderror" name="urun_tipi" id="urun_tipi" >
                                        @error('urun_tipi')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Maksimum Stok <span style="color: red;">(*)</span></label>
                                        <input type="number" class="form-control @error('maks_stok') is-invalid @enderror"  name="maks_stok" id="maks_stok" value="{{ old('maks_stok') }}">
                                        @error('maks_stok')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label> Depo Miktarı </label>
                                        <input type="number" class="form-control @error('depo_miktar') is-invalid @enderror" name="depo_miktar" id="depo_miktar" value="{{ old('depo_miktar') }}">
                                        @error('depo_miktar')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label> Minimum Stok </label>
                                        <input type="number" class="form-control @error('min_stok') is-invalid @enderror" name="min_stok" id="min_stok" value="{{ old('min_stok') }}">
                                        @error('min_stok')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label> Birim Fiyat </label>
                                        <input type="number" class="form-control @error('birim_fiyat') is-invalid @enderror" name="birim_fiyat" id="birim_fiyat" value="{{ old('birim_fiyat') }}">
                                        @error('birim_fiyat')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>





                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="button" id="kaydetButton">Kaydet</button>
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script>
        $(function () {

            $('[data-mask]').inputmask();


        });
    </script>

    <script>
        $(document).ready(function() {
            $("#kaydetButton").click(function() {
                Swal.fire({
                    title: 'Değişiklikleri kaydetmek istiyor musunuz?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Kaydet',
                    denyButtonText: `Kaydetme`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Kaydetme işlemi için formu gönder
                        $("#eksikurunForm").submit();
                    } else if (result.isDenied) {
                        Swal.fire('Değişiklikler kaydedilmedi', '', 'info');
                    }
                });
            });
        });
    </script>
@endsection
