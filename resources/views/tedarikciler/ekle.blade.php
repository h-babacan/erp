@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

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
                                <h3 class="card-title">Tedarikçi Ekleme</h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('tedarikci/ekleme')}}" method="post">
                                {{ csrf_field() }}
                                <div class="card-body">

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

                                    <div class="form-group">
                                        <label>Tedarikçi Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" class="form-control" name="tedarikci_adsoyad" id="tedarikci_adsoyad" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tedarikçi Telefon Numarası</label>
                                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefon" id="telefon">
                                    </div>





                                    <div class="form-group">
                                        <label>Tedarikçi tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="tedarikci_tipi" id="tedarikci_tipi" required>
                                            <option selected value="Doğrudan Tedarik">Doğrudan Tedarik</option>
                                            <option value="Dolaylı Tedarik">Dolaylı Tedarik</option>
                                            <option value="Mal Tedariği ve Hizmet Alımı">Mal Tedariği ve Hizmet Alımı</option>

                                        </select>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit">Kaydet</button>
                                    <a href="#" class="btn btn-danger" type="submit">Vazgeç</a>
                                </div>
                                <!-- /.card-footer-->
                            </form>
                            <form action="{{url('tedarikci/dataliste')}}" method="post">
                                @csrf


                                <!-- Main content -->
                                <section class="content">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Tedarikçiler</h3>
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
                                                                <th>İşlemler</th>

                                                                <th>Tedarikçi Ad Soyad</th>
                                                                <th>Tedarikçi Telefon Numarası</th>
                                                                <th>Tedarikçi Tipi</th>

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
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>







@endsection



@section('js')
    <script src="{{asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script>
        $(function () {

            $('[data-mask]').inputmask();


        });
    </script>


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
                    url: '{{url('tedarikci/listeyigetir')}}',
                    data: function (d) {
                        d.startDate = $('#datepicker_from').val();
                        d.endDate = $('#datepicker_to').val();
                    }
                },
                "columns": [
                    { data: 'butonlar', name: 'butonlar', orderable: false, searchable: false },

                    { data: 'tedarikci_adsoyad', name: 'tedarikci_adsoyad'},
                    { data: 'telefon', name: 'telefon'},
                    { data: 'tedarikci_tipi', name: 'tedarikci_tipi'},

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
        function sil(url) {
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
