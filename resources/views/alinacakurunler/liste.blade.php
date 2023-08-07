+@extends('layout.app')

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Eksik Ürünler Listesi</h3>
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


                                        <th>Ürün Adı</th>
                                        <th>Ürün Kodu</th>
                                        <th>Ürün Tipi</th>
                                        <th>Maks Stok</th>
                                        <th>Depodaki Miktar</th>
                                        <th>Min Stok</th>
                                        <th>Alınacak Miktar <br>(Önerilen)</th>
                                        <th>Birim Fiyat</th>
                                        <th>İşlemler</th>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
                    url: '{{url('alinacakurunler/listeyigetir')}}',
                    data: function (d) {
                        d.startDate = $('#datepicker_from').val();
                        d.endDate = $('#datepicker_to').val();
                    }
                },
                "columns": [


                    { data: 'urun_adi', name: 'urun_adi'},
                    { data: 'urun_kodu', name: 'urun_kodu'},
                    { data: 'urun_tipi', name: 'urun_tipi'},
                    { data: 'maks_stok', name: 'maks_stok'},
                    { data: 'depo_miktar', name: 'depo_miktar'},
                    { data: 'min_stok', name: 'min_stok'},
                    { data: 'alinacak_miktar', name: 'alinacak_miktar'},
                    { data: 'birim_fiyat', name: 'birim_fiyat'},
                    { data: 'butonlar', name: 'butonlar', orderable: false, searchable: false }
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
        function satinal(url) {
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Bu işlemi gerçekleştirmek istediğinizden emin misiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
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
