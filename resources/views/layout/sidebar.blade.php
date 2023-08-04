<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ERP </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!--<div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block">Furkan Doğan</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fa-solid fa-anchor"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link active">
                        <i class="fa-solid fa-house fa-beat" style="color: #fcfcfc;"></i>
                        <p>
                            Anasayfa

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-people-group fa-fade" style="color: #d5fe0b;"></i>
                        <p>
                            Müşteri İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/musteriler/ekle') }}" class="nav-link">
                                <i class="fa-solid fa-user-plus"></i>
                                <p>Yeni Müşteri Ekleme</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/musteriler/dataliste') }}" class="nav-link">
                                <i class="fa-solid fa-users"></i>
                                <p>Müşteri Listesi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/web/ekle') }}" class="nav-link">
                                <i class="fa-solid fa-spider"></i>
                                <p>Devrimsever Ekle</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-square-pen fa-bounce" style="color: #a112e2;"></i>
                        <p>
                            Planlama İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <p>
                                    Satın Alma İşlemleri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/deneme1') }}" class="nav-link">
                                        <i class="fa-solid fa-splotch"></i>
                                        <p>Deneme1</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/deneme2') }}" class="nav-link">
                                        <i class="fa-solid fa-screwdriver-wrench"></i>
                                        <p>DENEME 2</p>
                                    </a>
                                </li>


                            </ul>
                    </ul>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-list-ul" style="color: #11ee71;"></i>
                                <p>
                                   Listeler
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/tedarikci/ekle') }}" class="nav-link">
                                        <i class="fa-solid fa-layer-group"></i>
                                        <p>Tedarikçi Ekle ve Listele</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/alinacakurunler/ekle') }}" class="nav-link">
                                        <i class="fa-solid fa-file-circle-minus"></i>
                                        <p>Eksik Ürünler Listesi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/alinacakurunler/satinal') }}" class="nav-link">
                                        <i class="fa-brands fa-shopify"></i>
                                        <p>Satın Alınan Ürünler</p>
                                    </a>
                                </li>


                            </ul>
                    </ul>


                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="/takvim" class="nav-link">
                        <i class="fa-regular fa-calendar fa-beat-fade" style="color: #a66026;"></i>
                        <p class="text">Takvimi Görüntüle</p>
                    </a>
                </li>
              <!--  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
                -->
        </nav>
        <!-- /.sidebar-menu -->
    </div>

</aside>

