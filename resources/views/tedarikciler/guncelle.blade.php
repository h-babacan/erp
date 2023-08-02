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
                                <h3 class="card-title"></h3>

                                <div class="card-tools">
                                    <!-- sağ üste buton ekleme -->
                                </div>
                            </div>
                            <form action="{{url('tedarikci/guncelleme')}}" method="post">

                                {{ csrf_field() }}
                                <div class="card-body">
                                    <input type="hidden" value="{{$tedarikci->id}}" name="id" id="id">
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
                                        <label>Ad Soyad / Firma Adı <span style="color: red;">(*)</span></label>
                                        <input type="text" value="{{$tedarikci->tedarikci_adsoyad}}" class="form-control" name="tedarikci_adsoyad" id="tedarikci_adsoyad" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Telefon <span style="color: red;">(*)</span></label>


                                        <input type="text" value="{{$tedarikci->telefon}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="telefon" id="telefon">

                                    </div>

                                    <div class="form-group">
                                        <label>Tedarikçi tipi <span style="color: red;">(*)</span></label>
                                        <select class="form-control" name="tedarikci_tipi" id="tedarikci_tipi" required>
                                            <option @if($tedarikci->tedarikci_tipi=='0') selected @endif value="Doğrudan Tedarik">Doğrudan Tedarik</option>
                                            <option @if($tedarikci->tedarikci_tipi=='1') selected @endif value="Dolaylı Tedarik">Dolaylı Tedarik</option>
                                            <option @if($tedarikci->tedarikci_tipi=='2') selected @endif value="Mal Tedariği ve Hizmet Alımı">Mal Tedariği ve Hizmet Alımı</option>

                                        </select>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-success" type="submit">Güncelle</button>
                                    <a href="{{url('tedarikci/ekle')}}" class="btn btn-danger" type="submit">Vazgeç</a>
                                </div>
                                <!-- /.card-footer-->
                            </form>
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
    <script src="{{asset('/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script>
        $(function () {

            $('[data-mask]').inputmask();


        });
    </script>
@endsection
