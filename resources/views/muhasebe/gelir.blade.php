@extends('layout.app')

@section('css')

    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>


                                        <th>Müşteri Ad Soyad</th>
                                        <th>Telefon</th>
                                        <th>Müşteri Tipi</th>
                                        <th>Fatura Tipi</th>
                                        <th>Ürün</th>
                                        <th>Adet</th>
                                        <th>Birim Fiyat</th>
                                        <th>KDV</th>
                                        <th>Vergi</th>
                                        <th>Vergi Dairesi</th>
                                        <th>E-Posta</th>
                                        <th>Adres</th>
                                        <th>Fatura Tarihi</th>
                                        <th>Ödeme Tarihi</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                        <th>Önizle/Yazdır</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
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

    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,

                "language": {
                    url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Turkish.json",
                },

                "dom": 'Bfrtip',
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print','colvis'
                ],

                "processing": true,
                "serverSide": true,
                "ajax": {
                    type:'POST',
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    url: '{{url('muhasebe/datagelir')}}',
                    data: function (d) {
                        d.startDate = $('#datepicker_from').val();
                        d.endDate = $('#datepicker_to').val();
                    }
                },
                "columns": [
                    // { data: 'butonlar', name: 'butonlar', orderable: false, searchable: false },

                    { data: 'musteri_adsoyad', name: 'musteri_adsoyad'},
                    { data: 'telefon', name: 'telefon'},
                    { data: 'musteri_tipi', name: 'musteri_tipi'},
                    { data: 'fatura_tipi', name: 'fatura_tipi'},
                    { data: 'urun', name: 'urun'},
                    { data: 'adet', name: 'adet'},
                    { data: 'birim_fiyat', name: 'birim_fiyat'},
                    { data: 'kdv', name: 'kdv'},
                    { data: 'vergi', name: 'vergi'},
                    { data: 'vergi_dairesi', name: 'vergi_dairesi'},
                    { data: 'email', name: 'email'},
                    { data: 'adres', name: 'adres'},
                    { data: 'fatura_tarihi', name: 'fatura_tarihi'},
                    { data: 'odeme_tarihi', name: 'odeme_tarihi'},

                    { data: 'duzenle', name: 'duzenle'},
                    { data: 'sil', name: 'sil'},
                    { data: 'onizle', name: 'onizle'},
                ]

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


    <script>
        function silme(url) {
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Bu işlemi gerçekleştirmek istediğinizden emin misiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#b20808',
                confirmButtonText: 'Evet',
                cancelButtonText: 'Hayır',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Silme işlemine onay verildiyse, belirtilen URL'ye yönlendir
                    window.location.href = url;
                }
            });
        }
    </script>


@endsection
