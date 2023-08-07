@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css" />
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Takvim</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
    <div class="container" style="background-color: #ffffff;"><p><h1>Eklemek/Silmek için tıklayınız.</h1></p>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <hr>
            </div>
            <div class="panel-body" >
                <div id='calendar'></div>
            </div>
        </div>
    </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function () {
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                navLinks: true,
                editable: true,
                events: "takvim",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Etkinlik adı:');
                    if (title) {
                        var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
                        var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');
                        $.ajax({
                            url: "{{ URL::to('takvim/ekle') }}",
                            data: 'title=' + title + '&start=' + start + '&end=' + end +'&_token=' +"{{ csrf_token() }}",
                            type: "post",
                            success: function (data) {
                                alert("Başarıyla Eklendi.");
                                $('#calendar').fullCalendar('refetchEvents');
                            }
                        });
                    }
                },
                eventClick: function (event) {
                    var deleteMsg = confirm("Gerçekten silmek istediğinize emin misiniz?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: "{{ URL::to('/takvim/sil') }}",
                            data: "&id=" + event.id+'&_token=' +"{{ csrf_token() }}",
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                    alert("Başarıyla Silindi.");
                                }
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
