
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
            text-align: right;
        }
          .yazdir{
             margin-top: 50px;
          }
            .bosluk{
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
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><b>Yönlendirme sayfasındasınız. Geri dönmek için "Vazgeç" butonuna tıklayın.</b></h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">

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
{{--                                </div>--}}



{{--                                Start creating your amazing application!--}}
{{--                            </div>--}}
                            <!-- /.card-body -->
                                        <a href="/muhasebe/print" rel="noopener"
                                           target="_blank"
                                           class="btn btn-default"><i
                                                class="fas fa-print"></i> Yazdır</a>
                                        <div class="bosluk"></div>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal"
                                    data-target="#myModal">Önizle
                            </button>
                                        <div class="bosluk"></div>
                                        <a href="/muhasebe/gelir"
                                           target="_self"
                                           class="btn btn-danger">Vazgeç</a>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-xl ">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <!-- Main content -->
                                        {{--                                                <div class="content-wrapper" >--}}
                                        <!-- Content Header (Page header) -->
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
                                                                        </tbody>
                                                                    <div class="container">
                                                                    <div class="header">
                                                                        <h1>E-Fatura</h1>
                                                                    </div>
                                                                    <div class="invoice-info">

                                                                        <p>
                                                                            Müşteri Adı: A
                                                                            <br>
                                                                            Telefon: 2654656
                                                                            <br>
                                                                            E-posta: Company@mail.com
                                                                            <br>
                                                                            Adres: bla bla bla
                                                                        </p>

                                                                        <p>
                                                                            Fatura Tarihi: Company A
                                                                            <br>
                                                                            Fatura No: 2654656
                                                                            <br>
                                                                            Vergi No: Company A
                                                                            <br>

                                                                        </p>


                                                                    </div>
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Item</th>
                                                                            <th>Quantity</th>
                                                                            <th>Unit Price</th>
                                                                            <th>Total</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Product 1</td>
                                                                            <td>2</td>
                                                                            <td>$50.00</td>
                                                                            <td>$100.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Product 2</td>
                                                                            <td>3</td>
                                                                            <td>$30.00</td>
                                                                            <td>$90.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Product 3</td>
                                                                            <td>3</td>
                                                                            <td>$30.00</td>
                                                                            <td>$90.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Product 4</td>
                                                                            <td>3</td>
                                                                            <td>$30.00</td>
                                                                            <td>$90.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Product 5</td>
                                                                            <td>3</td>
                                                                            <td>$30.00</td>
                                                                            <td>$90.00</td>
                                                                        </tr>

                                                                    </table>
                                                                    <div class="total">
                                                                        <p>Total Amount: $190.00</p>
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
                                                                    <div class="yazdir">   </div>
                                                                    <a href="/muhasebe/print" rel="noopener"
                                                                       target="_blank"
                                                                       class="btn btn-default"><i
                                                                            class="fas fa-print"></i> Yazdır</a>
                                                                    <button type="button"
                                                                            class="btn btn-primary float-right btn-dark"
                                                                            style="margin-right: 5px;"
                                                                            onclick="window.location='{{url('muhasebe/gelir/')}}'">Vazgeç

                                                                    </button>


{{--                                                                    <div class="pdf"> </div>--}}
                                                                    <button type="button"
                                                                            class="btn btn-primary float-right"
                                                                            style="margin-right: 5px;"
                                                                            onclick="window.location='{{url('muhasebe/pdf')}}'">
                                                                        <i class="fas fa-download"></i> Generate
                                                                        PDF
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.invoice -->
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->
                                            </div><!-- /.container-fluid -->
                                        </section>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.content -->
                                    {{--                                                </div>--}}

                                </div>
                            </div>

                            <!-- /.card-footer-->
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

@endsection


