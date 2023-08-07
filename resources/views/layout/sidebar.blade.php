<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ERP </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
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
                <li class="nav-item">
<<<<<<< Updated upstream
                    <a href="{{ url('/') }}" class="nav-link active">
                        <i class="fa-solid fa-house fa-beat" style="color: #fcfcfc;"></i>
=======
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                        <li class="nav-item">
                            <a href="{{ url('/web/ekle') }}" class="nav-link">
                                <i class="fa-solid fa-spider"></i>
                                <p>Devrimsever Ekle</p>
                            </a>
                        </li>


=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                                    <a href="{{ url('/deneme1') }}" class="nav-link">
                                        <i class="fa-solid fa-splotch"></i>
                                        <p>Deneme1</p>
=======
                                    <a href="{{ url('/alinacakurunler/ekle') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Eksik Ürün Ekle</p>
>>>>>>> Stashed changes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/deneme2') }}" class="nav-link">
                                        <i class="fa-solid fa-screwdriver-wrench"></i>
                                        <p>DENEME 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
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
<<<<<<< Updated upstream
                                    <a href="{{ url('/alinacakurunler/ekle') }}" class="nav-link">
                                        <i class="fa-solid fa-file-circle-minus"></i>
=======
                                    <a href="{{ url('/alinacakurunler/liste') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
>>>>>>> Stashed changes
                                        <p>Eksik Ürünler Listesi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
<<<<<<< Updated upstream
                                    <a href="{{ url('/alinacakurunler/satinal') }}" class="nav-link">
                                        <i class="fa-brands fa-shopify"></i>
=======
                                    <a href="{{ url('/alinacakurunler/satinal') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
>>>>>>> Stashed changes
                                        <p>Satın Alınan Ürünler</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="/takvim" class="nav-link">
                        <i class="fa-regular fa-calendar fa-beat-fade" style="color: #a66026;"></i>
                        <p class="text">Takvimi Görüntüle</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<<<<<<< Updated upstream
=======
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Sayfa URL'sini al
        const currentHref = window.location.href;

        // Belirtilen URL'ye göre menüyü seç
        $('.nav-sidebar a').each(function () {
            const activeHref = $(this).prop('href');

            if (currentHref.indexOf(activeHref) === 0) {
                $(this).addClass('active');
                $(this).closest('.nav-treeview').parent().addClass('menu-open');
                $(this).parents('.nav-item').addClass('menu-open');
            }
        });

        // Alt menüleri aç veya kapat
        $('.nav-treeview .nav-item').each(function () {
            const activeHref = $(this).find('.nav-link').prop('href');

            if (currentHref.indexOf(activeHref) === 0) {
                $(this).addClass('menu-open');
            }
        });
    });
</script>
>>>>>>> Stashed changes
