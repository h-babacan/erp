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
                                <h3 class="card-title">{{$title}}</h3>

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
                                </div>


                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Müşteri Ad Soyad</th>
                                        <th>Telefon</th>
                                        <th>Müşteri Tipi</th>
                                        <th style="width: 40px">Durum</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($musteriler as $musteri )
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$musteri->musteri_adsoyad}}</td>
                                            <td>{{$musteri->telefon}}</td>
                                            <td>
                                                @if($musteri->musteri_tipi=='0')
                                                    Bireysel Müşteri
                                                @endif

                                                @if($musteri->musteri_tipi=='1')
                                                    Kurumsal Müşteri
                                                @endif

                                                @if($musteri->musteri_tipi=='2')
                                                    Filo Müşterisi
                                                @endif
                                            </td>

                                            <td>
                                                @if($musteri->durum=='0')
                                                    <span class="badge bg-danger">pasif</span>
                                                @endif

                                                @if($musteri->durum=='1')
                                                    <span class="badge bg-success">Aktif</span>
                                                @endif

                                            </td>
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








@section('js')

@endsection
