@extends('layout.app')

@section('css')



@endsection

@section('content')

    <div class="content-wrapper" ;>


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">
                        <!-- Default box -->
                        <div class="card" style="margin-top: 10px">
                            <div class="card-header">
                                <h3 class="card-title">Fatura Giriş</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('muhasebe/gelirekle')}}" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">

                                    @if(session()->get('durum')=='1')
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>

                                            {{session()->get('mesaj')}}
                                        </div>
                                    @endif


                                    @if(session()->get('durum')=='0')
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>

                                            {{session()->get('mesaj')}}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label>Ad Soyad / Firma Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" class="form-control" name="musteri_adsoyad"
                                               id="musteri_adsoyad" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Müşteri tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="musteri_tipi" id="musteri_tipi" required>
                                            <option selected value="0">Bireysel Müşteri</option>
                                            <option value="1">Kurumsal Müşteri</option>
                                            <option value="2">Filo Müşterisi</option>

                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Fatura Tipini Seçiniz<span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="fatura_tipi" id="fatura_tipi" required>

                                            <option selected value="Alış">Alış</option>
                                            <option value="Satış">Satış</option>

                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Fatura Tarihi</label>
                                        <input type="date" class="form-control" name="fatura_tarihi" id="fatura_tarihi" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Son Ödeme Tarihi:</label>
                                        <input type="date" class="form-control" name="odeme_tarihi" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Ürün veya Hizmet:</label>
                                        <select class="form-control" name="urun" required>
                                            <!-- Ürün veya hizmet seçeneklerini burada doldurun -->
                                            <option value="Takı">Takı</option>
                                            <option value="Giyim">Giyim</option>
                                            <option value="Bakliyat">Bakliyat</option>
                                            <option value="İçecek">İçecek </option>
                                            <!-- Dilerseniz veritabanından çekerek doldurabilirsiniz -->
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Katma Değer Vergisi</label>
                                        <select class="form-control" name="kdv" required>
                                            <!-- Ürün veya hizmet seçeneklerini burada doldurun -->
                                            <option value="%10">%10</option>
                                            <option value="%18">%18</option>
                                            <option value="%20">%20</option>

                                            <!-- Dilerseniz veritabanından çekerek doldurabilirsiniz -->
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Adet:</label>
                                        <input type="number" min="0" class="form-control" name="adet" id="adet" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Birim Fiyat:</label>
                                        <input type="number" min="0" class="form-control" name="birim_fiyat"
                                               id="birim_fiyat" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Tc / Vergi No</label>
                                        <input type="text" class="form-control" name="vergi" id="vergi" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Vergi Dairesi</label>
                                        <input type="text" class="form-control" name="vergi_dairesi" id="vergi_dairesi" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Telefon <span style="color: red;">(*)</span></label>
                                        <input type="text" class="form-control"
                                               data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefon"
                                               id="telefon" required>
                                    </div>


                                    <div class="form-group">
                                        <label>Eposta adresi <span style="color: red;">(*)</span></label>

                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Adres </label>
                                        <textarea class="form-control" rows="3" name="adres" id="adres" required></textarea>
                                    </div>

{{--                                        onclick="window.location='{{url('muhasebe/gelir')}}'"--}}

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default"
                                            type="submit" >Kaydet <i class="fa-solid fa-file-arrow-down" style="color: #ffffff;"></i>
                                    </button>

                                    <a href="#" class="btn btn-danger" type="submit">Vazgeç <i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a>
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

    <script>
        // Fatura önizleme modalını tetikleyen butonun tıklanma olayı
        document.getElementById("btnOnizleme").addEventListener("click", function() {
            // Formdaki girilen bilgileri al
            var faturaNo = document.getElementById("fatura_no").value;
            var tutar = document.getElementById("tutar").value;
            // Diğer giriş alanları için de değerleri alabilirsiniz

            // Modal içinde önizleme alanlarını güncelle
            document.getElementById("modalFaturaNo").textContent = faturaNo;
            document.getElementById("modalTutar").textContent = tutar;
            // Diğer önizleme alanları için de değerleri güncelleyebilirsiniz
        });

        // Kaydet butonunun tıklanma olayı
        document.getElementById("btnKaydet").addEventListener("click", function() {
            // Form verilerini veritabanına gönderme işlemi yapabilirsiniz

        });
    </script>

@endsection
