@extends('layout.app')

@section('css')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            height: 730px;
            margin: 0 auto;

            padding: 80px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-info p {
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right ;
            background-color: #f2f2f2;


        }

        .yazdir {
            margin-top: 50px;
        }

        .bosluk {
            padding: 5px;
        }
    </style>
    </head>
@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <!-- Default box -->
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <!-- sağ üste buton ekleme -->
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="content-header">
                            <div class="container-fluid">
                                {{--                                                            <div class="row mb-2">--}}
                                {{--                                                                <div class="col-sm-6">--}}
                                {{--                                                                    <h1>Invoice</h1>--}}
                                {{--                                                                </div>--}}
                                {{--                                                                <div class="col-sm-6">--}}
                                {{--                                                                    <ol class="breadcrumb float-sm-right">--}}
                                {{--                                                                        <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                                {{--                                                                        <li class="breadcrumb-item active">Invoice</li>--}}
                                {{--                                                                    </ol>--}}
                                {{--                                                                </div>--}}
                                {{--                                                            </div>--}}
                            </div><!-- /.container-fluid -->
                        </section>

                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        {{--                                                                    <div class="callout callout-info">--}}
                                        {{--                                                                        <h5><i class="fas fa-info"></i> Note:</h5>--}}
                                        {{--                                                                        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.--}}
                                        {{--                                                                    </div>--}}


                                        <!-- Main content -->
                                        <div class="invoice p-3 mb-3">
                                            <!-- title row -->
                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="container">
                                                        <div class="header">
                                                            <h1>E-Fatura</h1>
                                                        </div>
                                                        <div class="invoice-info">

                                                            <p>
                                                                Ad Soyad: {{$muhasebe->musteri_adsoyad}}
                                                                <br>
                                                                Telefon: {{$muhasebe->telefon}}
                                                                <br>
                                                                E-posta:  {{$muhasebe->email}}
                                                                <br>
                                                                Adres:  {{$muhasebe->adres}}
                                                            </p>

                                                            <p>
                                                                Fatura Tarihi:  {{$muhasebe->fatura_tarihi}}
                                                                <br>
                                                                Fatura No: {{$muhasebe->fatura_no}}
                                                                <br>
                                                                Vergi No: {{$muhasebe->vergi}}
                                                                <br>

                                                            </p>


                                                        </div>
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>Ürün</th>
                                                                <th>Adet</th>
                                                                <th>Birim Fiyat</th>
                                                                <th>Toplam</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>{{$muhasebe->urun}}</td>
                                                                <td>{{$muhasebe->adet}}</td>
                                                                <td>{{$muhasebe->birim_fiyat}}</td>
                                                                <td>${{$toplam = $muhasebe->adet * $muhasebe->birim_fiyat}}.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Örnek Ürün</td>
                                                                <td>0</td>
                                                                <td>$00.00</td>
                                                                <td>$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Örnek Ürün</td>
                                                                <td>0</td>
                                                                <td>$00.00</td>
                                                                <td>$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Örnek Ürün</td>
                                                                <td>0</td>
                                                                <td>$00.00</td>
                                                                <td>$00.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Örnek Ürün</td>
                                                                <td>0</td>
                                                                <td>$00.00</td>
                                                                <td>$00.00</td>
                                                            </tr>

                                                        </table>
                                                        <div class="total">
                                                    <p><b>Toplam Tutar:  ${{$toplam}}</b></p>
                                                        </div>
                                                    </div>
                                                    </tbody>
                                                    <!-- /.row -->

                                                    {{--                                                            <div class="row">--}}
                                                    {{--                                                                <!-- accepted payments column -->--}}

                                                    {{--                                                                <!-- /.col -->--}}

                                                    {{--                                                                <!-- /.col -->--}}
                                                    {{--                                                            </div>--}}
                                                    <!-- /.row -->

                                                    <!-- this row will not appear when printing -->
                                                    <div class="row no-print">
                                                        <div class="col-12">
                                                            <div class="yazdir"></div>
{{--                                                            <a href="/muhasebe/print" rel="noopener"--}}
{{--                                                               target="_blank"--}}
{{--                                                               class="btn btn-default"><i--}}
{{--                                                                    class="fas fa-print"></i> Yazdır</a>--}}
                                                            <button type="button" class="btn btn-primary" id="printButton">Sayfayı Yazdır <i class="fa-solid fa-print" style="color: #ffffff;"></i></button>

                                                            <button type="button"
                                                                    class="btn btn-primary float-right btn-danger"
                                                                    style="margin-right: 5px;"
                                                                    onclick="window.location='{{url('muhasebe/gelir')}}'">
                                                                Vazgeç <i class="fa-solid fa-xmark" style="color: #ffffff;"></i>

                                                            </button>


                                                            {{--                                                                    <div class="pdf"> </div>--}}
                                                            <button type="button"
                                                                    class="btn btn-primary float-right"
                                                                    style="margin-right: 5px;"
                                                                    onclick="window.location='{{url('muhasebe/pdf')}}/{{$muhasebe['id']}}'">
                                                                Generate PDF <i class="fa-solid fa-file-pdf" style="color: #ffffff;"></i>
                                                            </button>


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.invoice -->
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.container-fluid -->
                        </section>
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection








@section('js')
    <script>
        document.getElementById('printButton').addEventListener('click', function () {
            window.print();
        });
    </script>
    <script>
        window.alert("Yönlendirme sayfasındasınız. Geri dönmek için 'Vazgeç' butonuna tıklayın.");


    </script>
@endsection


