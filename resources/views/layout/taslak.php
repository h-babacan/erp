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
                            <h3 class="card-title">Title</h3>

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



                            Start creating your amazing application!
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

@endsection
