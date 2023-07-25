@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                                <h3 class="card-title">{{$title}}</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">



                                </div>


                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Ürün adı</th>
                                        <th>stok durumu</th>
                                        <th>tedarikçi</th>
                                        <th>eylem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($liste as $stok )
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$stok->urun_isim}}</td>
                                            <td>{{$stok->stok_miktari}}</td>
                                            <td>{{$stok->tedarikci}}</td>
                                            <td>
                                                <!--                                                <a href="#" style="background: #343A40 ;
                                                                                                 color:white ; border: #343A40; border-radius: 3px ; padding: 1px";  >Detay</a>
                                                -->
                                                <a href="{{route('urun_detay')}}"><button type="button" class="btn btn-block bg-gradient-info"
                                                                                          style="padding: 5px ; width: 50% ; margin-left: 25% "
                                                    >Detay</button></a>

                                            </td>
                                            <!--                                            <td>
                                                @if($stok->musteri_tipi=='0')
                                                Bireysel Müşteri
@endif

                                            @if($stok->musteri_tipi=='1')
                                                Kurumsal Müşteri
@endif

                                            @if($stok->musteri_tipi=='2')
                                                Filo Müşterisi
@endif
                                            </td>

                                            <td>
                                                @if($stok->durum=='0')
                                                <span class="badge bg-danger">pasif</span>
@endif

                                            @if($stok->durum=='1')
                                                <span class="badge bg-success">Aktif</span>
@endif

                                            </td>
    -->
                                        </tr>
                                            <?php $i=$i+1; ?>
                                    @endforeach

                                    </tbody>
                                </table>



                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">

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
