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
                                <h3 class="card-title">deneme</h3>

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
                                        <th>Tedarikçi Ad Soyad</th>
                                        <th>Tedarikçi Telefon Numarası</th>
                                        <th>Tedarikçi Tipi</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($tedarikciler as $tedarikci )
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$tedarikci->tedarikci_adsoyad}}</td>
                                            <td>{{$tedarikci->telefon}}</td>
                                            <td>
                                                @if($musteri->tedarikci_tipi=='0')
                                                    Seçenek 1
                                                @endif

                                                @if($musteri->tedarikci_tipi=='1')
                                                        Seçenek 2
                                                @endif

                                                @if($musteri->tedarikci_tipi=='2')
                                                        Seçenek 3
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
<script>
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })</script>
@endsection
