<<<<<<< Updated upstream
=======
@extends('layout.app')
>>>>>>> Stashed changes

                                    @extends('layout.app')

                                    @section('css')

                                    @endsection

                                    @section('content')

                                        <div class="content-wrapper " >


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
                                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
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

                                                                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

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
                                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

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
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

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
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

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
                                        <a href="#" class="small-box-footer">Daha fazla bilgi <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="#" class="small-box-footer">Daha fazla bilgi <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="#" class="small-box-footer">Daha fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
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
                                        <a href="#" class="small-box-footer">Daha Fazla Bilgi <i class="fas fa-arrow-circle-right"></i></a>
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
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
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
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
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

                            <div style="margin-right:50%; margin-left:50%; width:50%; height: 50%; ">
                                <div class="card bg-gradient-success">
                                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                                        <h3 class="card-title">
                                            <i class="far fa-calendar-alt"></i><font _mstmutation="1">

                                                Takvim
                                            </font></h3>
                                        <!-- tools card -->
                                        <div class="card-tools">
                                            <!-- button with a dropdown -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu">
                                                    <a href="#" class="dropdown-item">Yeni etkinlik ekle</a>
                                                    <a href="#" class="dropdown-item">Olayları temizle</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">Takvimi görüntüleme</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>

                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pt-0">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">Ağustos 2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Pazar</th><th class="dow">Pazartesi</th><th class="dow">Salı</th><th class="dow">Çarşamba</th><th class="dow">Perşembe</th><th class="dow">Cuma</th><th class="dow">Cumartesi</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="07/30/2023" class="day old weekend">30</td><td data-action="selectDay" data-day="07/31/2023" class="day old">31</td><td data-action="selectDay" data-day="08/01/2023" class="day active today">1</td><td data-action="selectDay" data-day="08/02/2023" class="day">2</td><td data-action="selectDay" data-day="08/03/2023" class="day">3</td><td data-action="selectDay" data-day="08/04/2023" class="day">4</td><td data-action="selectDay" data-day="08/05/2023" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="08/06/2023" class="day weekend">6</td><td data-action="selectDay" data-day="08/07/2023" class="day">7</td><td data-action="selectDay" data-day="08/08/2023" class="day">8</td><td data-action="selectDay" data-day="08/09/2023" class="day">9</td><td data-action="selectDay" data-day="08/10/2023" class="day">10</td><td data-action="selectDay" data-day="08/11/2023" class="day">11</td><td data-action="selectDay" data-day="08/12/2023" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="08/13/2023" class="day weekend">13</td><td data-action="selectDay" data-day="08/14/2023" class="day">14</td><td data-action="selectDay" data-day="08/15/2023" class="day">15</td><td data-action="selectDay" data-day="08/16/2023" class="day">16</td><td data-action="selectDay" data-day="08/17/2023" class="day">17</td><td data-action="selectDay" data-day="08/18/2023" class="day">18</td><td data-action="selectDay" data-day="08/19/2023" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="08/20/2023" class="day weekend">20</td><td data-action="selectDay" data-day="08/21/2023" class="day">21</td><td data-action="selectDay" data-day="08/22/2023" class="day">22</td><td data-action="selectDay" data-day="08/23/2023" class="day">23</td><td data-action="selectDay" data-day="08/24/2023" class="day">24</td><td data-action="selectDay" data-day="08/25/2023" class="day">25</td><td data-action="selectDay" data-day="08/26/2023" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="08/27/2023" class="day weekend">27</td><td data-action="selectDay" data-day="08/28/2023" class="day">28</td><td data-action="selectDay" data-day="08/29/2023" class="day">29</td><td data-action="selectDay" data-day="08/30/2023" class="day">30</td><td data-action="selectDay" data-day="08/31/2023" class="day">31</td><td data-action="selectDay" data-day="09/01/2023" class="day new">1</td><td data-action="selectDay" data-day="09/02/2023" class="day new weekend">2</td></tr><tr><td data-action="selectDay" data-day="09/03/2023" class="day new weekend">3</td><td data-action="selectDay" data-day="09/04/2023" class="day new">4</td><td data-action="selectDay" data-day="09/05/2023" class="day new">5</td><td data-action="selectDay" data-day="09/06/2023" class="day new">6</td><td data-action="selectDay" data-day="09/07/2023" class="day new">7</td><td data-action="selectDay" data-day="09/08/2023" class="day new">8</td><td data-action="selectDay" data-day="09/09/2023" class="day new weekend">9</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Ocak</span><span data-action="selectMonth" class="month">  Şubat</span><span data-action="selectMonth" class="month">Mart</span><span data-action="selectMonth" class="month">Nisan</span><span data-action="selectMonth" class="month">Mayıs</span><span data-action="selectMonth" class="month">Haziran</span><span data-action="selectMonth" class="month">Temmuz</span><span data-action="selectMonth" class="month active">Ağustos</span><span data-action="selectMonth" class="month">Eylül</span><span data-action="selectMonth" class="month">Ekim</span><span data-action="selectMonth" class="month">Kasım</span><span data-action="selectMonth" class="month">Aralık</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                                    </div>

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

@endsection
