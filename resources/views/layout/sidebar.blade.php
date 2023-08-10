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
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
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
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Anasayfa

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Müşteri İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/musteriler/ekle') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Yeni Müşteri Ekleme</p>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a href="{{ url('/musteriler/dataliste') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Müşteri Listesi</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-file-contract" style="color: #45de57;"></i>                        <p>
                            Muhasebe İşlemleri
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Faturalar
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ url('/muhasebe/gider') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fatura Giriş</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/muhasebe/gelir') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Gelir/Gider Tutarları</p>
                                    </a>
                                </li>



                                <li class="nav-item">
                                    <a href="{{ url('/muhasebe/kesim') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fatura Kesme</p>
                                    </a>
                                </li>
                            </ul>

                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Listeler
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li>
                                    <a href="{{ url('/muhasebe/liste') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fiyat Listesi</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('/muhasebe/maas') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maaş Ödeme Takip Listeleri</p>
                                    </a>
                                </li>

                            </ul>

                    </ul>
                </li>


                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
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
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>

</aside>
