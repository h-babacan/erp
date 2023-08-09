@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
@endsection

@section('content')

    <div class="content-wrapper ">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 mt-2">
                        <!-- Default box -->
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">Title</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box">

                                            <span class="info-box-icon bg-info elevation-1"><i
                                                    class="fas fa-cog"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">CPU Trafiği</span>
                                                <span class="info-box-number">
                  20
                  <small>%</small>
                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-danger elevation-1"><i
                                                    class="fas fa-thumbs-up"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Beğeni</span>
                                                <span class="info-box-number">60,720</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->

                                    <!-- fix for small devices only -->
                                    <div class="clearfix hidden-md-up"></div>

                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i
                                                    class="fas fa-shopping-cart"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Satış</span>
                                                <span class="info-box-number">1000</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i
                                                    class="fas fa-users"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Yeni Üyeler</span>
                                                <span class="info-box-number">4,000</span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>200</h3>

                                            <p>Yeni Siparişler</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Daha fazla bilgi <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>70<sup style="font-size: 20px">%</sup></h3>

                                            <p>Hemen Çıkma Oranı </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Daha fazla bilgi <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>80</h3>

                                            <p>Kullanıcı Kayıtları</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Daha fazla Bilgi <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>80</h3>

                                            <p>Tekil Ziyaretçiler</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">Daha Fazla Bilgi <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Footer
                            </div>
                            <!-- /.card-footer-->
                            <div style="margin-left:5px; width:50%; height: 50%;">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h3 class="card-title">
                                            Online Mağazaya Genel Bakış</h3>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-sm btn-tool">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-tool">
                                                <i class="fas fa-bars"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div
                                            class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                            <p class="text-success text-xl">
                                                <i class="ion ion-ios-refresh-empty"></i>
                                            </p>
                                            <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 8%
                    </span>
                                                <span class="text-muted">DÖNÜŞÜM ORANI</span>
                                            </p>
                                        </div>
                                        <!-- /.d-flex -->
                                        <div
                                            class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                            <p class="text-warning text-xl">
                                                <i class="ion ion-ios-cart-outline"></i>
                                            </p>
                                            <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 1.2%
                    </span>
                                                <span class="text-muted">SATIŞ ORANI</span>
                                            </p>
                                        </div>
                                        <!-- /.d-flex -->
                                        <div class="d-flex justify-content-between align-items-center mb-0">
                                            <p class="text-danger text-xl">
                                                <i class="ion ion-ios-people-outline"></i>
                                            </p>
                                            <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 7%
                    </span>
                                                <span class="text-muted">KAYIT ORANI</span>
                                            </p>
                                        </div>
                                        <!-- /.d-flex -->
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-gradient-success">
                                <div class="card-header border-0">

                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <!-- tools card -->

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pt-0">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
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
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $('#calendar').datetimepicker({
            format: 'L',
            inline: true
        })
    </script>

@endsection
