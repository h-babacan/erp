@extends('layout.app')


@section('css')

    <style>
        .color-palette {
            height: 35px;
            line-height: 35px;
            padding-right: .75rem;

        }

        .color-palette.disabled {
            padding-right: 0;
        }

        .color-palette-set {
            margin-bottom: 15px;
        }

        .color-palette:hover span {
            display: block;
        }

        .color-palette.disabled span {
            display: block;
            padding-left: .75rem;
        }

        .color-palette-box h4 {
            position: absolute;
            left: 1.25rem;
            margin-top: .75rem;
            color: rgba(255, 255, 255, 0.8);
            font-size: 12px;
            display: block;
            z-index: 7;
        }
    </style>

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
                                <h3 class="card-title">Urun Detay</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>


                            <div class="card-body">

                                <input type="hidden" value="{{$stok->idstok}}" name="idstok" id="idstok">

                            </div>


                            <div class="row mr-2 ml-2">
                                <div class="col-6 pr-0">
                                    <div class="color-palette-set">
                                        <div class="bg-primary color-palette pl-4"><span> {{$stok['urun_isim']}}</span>
                                        </div>
                                        <div class="bg-primary disabled color-palette" style="height: fit-content">
                                            <ul>
                                                <li>STOK MİKTARI</li>
                                                <li>TEDARİKÇİ</li>
                                                <li>ÜRÜN ALIŞ FİYATI</li>
                                                <li>ÜRÜN SATIŞ FİYATI</li>
                                                <li>ÜRÜNÜN BULUNDUĞU DEPO</li>
                                                <li>ÜRÜN BİRİMİ</li>
                                                <li>ÜRÜNÜN CİNSİ</li>
                                                <li>ÜRÜN DETAYI</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pl-0">
                                    <div class="color-palette-set" style="border-left: 1px solid #007bff">
                                        <div class="bg-primary color-palette pl-4"></span>
                                        </div>
                                        <div class="bg-primary disabled color-palette" style="height: fit-content">
                                            <ul>
                                                <li>{{$stok['stok_miktari']}}</li>
                                                <li>{{$stok['tedarikci']}}</li>
                                                <li>{{$stok['urun_alis']}}</li>
                                                <li>{{$stok['urun_satis']}}</li>

                                                <li>
                                                    @if($stok['hangi_depoda']==1)
                                                        Ana Depo
                                                    @elseif($stok['hangi_depoda']==2)
                                                        2. Depo
                                                    @else
                                                        3. Depo
                                                    @endif
                                                </li>

                                                <li>
                                                    @if($stok['urun_birimi']==1)
                                                        Adet
                                                    @elseif($stok['urun_birimi']==2)
                                                        KG
                                                    @else
                                                        Litre
                                                    @endif
                                                </li>

                                                <li>
                                                    @if($stok['urun_cinsi']==1)
                                                        Elektronik
                                                    @elseif($stok['urun_cinsi']==2)
                                                        Giyim
                                                    @else
                                                        Bakliyat
                                                    @endif
                                                </li>
                                                <li>{{$stok['urun_detay']}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url()->previous() }}"><button class="btn bg-orange" style="color: #FFFFFF !important" type="submit">Listeye Dön</button></a>
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
@endsection
