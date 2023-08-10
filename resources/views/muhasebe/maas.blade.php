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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
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

                                                <form method="post" action="#">
                                                    @csrf
                                                    <label>Müşteri Seçimi:</label>
                                                    <select name="musteri">
                                                        <!-- Müşteri seçeneklerini burada doldurun -->
                                                        <option value="musteri1">Müşteri 1</option>
                                                        <option value="musteri2">Müşteri 2</option>
                                                        <!-- Dilerseniz veritabanından çekerek doldurabilirsiniz -->
                                                    </select>

                                                    <br><br>

                                                    <label>Fatura Numarası:</label>
                                                    <input type="text"  class="form-control" name="fatura_no">


                                                    <label>Fatura Tarihi:</label>
                                                    <input type="date"  class="form-control" name="fatura_tarihi">



                                                    <label>Son Ödeme Tarihi:</label>
                                                    <input type="date"  class="form-control" name="son_odeme_tarihi">



                                                    <label>Fatura Açıklaması:</label>
                                                    <textarea  class="form-control" name="fatura_aciklama"></textarea>

                                                    <br><br>


                                                    <label>Ürün veya Hizmet:</label>
                                                    <select name="urun_hizmet">
                                                        <!-- Ürün veya hizmet seçeneklerini burada doldurun -->
                                                        <option value="urun1">Ürün 1</option>
                                                        <option value="urun2">Ürün 2</option>
                                                        <!-- Dilerseniz veritabanından çekerek doldurabilirsiniz -->
                                                    </select>

                                                    <br><br>

                                                    <label>Adet:</label>
                                                    <input type="number" name="adet">

                                                    <br><br>

                                                    <label>Birim Fiyat:</label>
                                                    <input type="number" name="birim_fiyat">

                                                    <br><br>

                                                    <!-- Eklenen ürün/hizmetleri tablo şeklinde listelemek için -->
{{--                                                    <table>--}}
{{--                                                        <tr>--}}
{{--                                                            <th>Ürün/Hizmet</th>--}}
{{--                                                            <th>Adet</th>--}}
{{--                                                            <th>Birim Fiyat</th>--}}
{{--                                                            <th>Toplam Tutar</th>--}}
{{--                                                            <th></th>--}}
{{--                                                        </tr>--}}
                                                        <!-- Burada eklenen ürün/hizmetlerin listelenmesi gerekiyor -->
{{--                                                    </table>--}}



                                                    <label>Fatura Toplam Tutar:</label>
                                                    <input type="number" name="toplam_tutar" readonly>

                                                    <br><br>

                                                    <label>KDV:</label>
                                                    <input type="number" name="kdv">

                                                    <br><br>

                                                    <label>Ödeme Alındı:</label>
                                                    <input type="number" name="odeme_alindi">

                                                    <br><br>

                                                    <label>Ödeme Tarihi:</label>
                                                    <input type="date" name="odeme_tarihi">

                                                    <br><br>

                                                    <button type="submit">Kaydet</button>
                                                    <a href="#">İptal</a>
                                                </form>
                                </div>
                                </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

        </div>
        </section></div>
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
                    url: '{{url('musteriler/listeyigetir')}}',
                    data: function (d) {
                        d.startDate = $('#datepicker_from').val();
                        d.endDate = $('#datepicker_to').val();
                    }
                },
                "columns": [
                    { data: 'butonlar', name: 'butonlar', orderable: false, searchable: false },

                    { data: 'musteri_adsoyad', name: 'musteri_adsoyad'},
                    { data: 'telefon', name: 'telefon'},
                    { data: 'musteri_tipi', name: 'musteri_tipi'},
                    { data: 'durum', name: 'durum'}
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
@endsection

