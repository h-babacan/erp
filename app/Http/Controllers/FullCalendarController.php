<?php

namespace App\Http\Controllers;

use App\Models\Satinal;
use Illuminate\Http\Request;
use App\Models\Event;

class FullCalendarController extends Controller
{
    public function takvim(){
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                ->get(['id','title','start', 'end']);
            return response()->json($events);

        }
        return view('sidebarextensions.takvim');

    }
    public function createEvent(Request $request){
        $data = $request->except('_token');
        $events = Event::insert($data);
        return response()->json($events);
    }

    public function deleteEvent(Request $request){
        $event = Event::find($request->id);
        return $event->delete();
    }

    public function getEvents(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $events = Event::where('start', '>=', $start)
            ->where('end', '<=', $end)
            ->select('id', 'title', 'start', 'end')
            ->get();

        $satinals = Satinal::where('tarih', '>=', $start)
            ->where('tarih', '<=', $end)
            ->select('urun_adi', 'alinacak_miktar', 'birim_fiyat', 'tarih')
            ->get();

        foreach ($satinals as $satinal) {
            $event = new \stdClass();
            $event->title = $satinal->urun_adi . ' (' . $satinal->alinacak_miktar . ' x ' . $satinal->birim_fiyat . ' TL)';
            $event->start = $satinal->tarih . 'T00:00:00'; // Tarih alanını düzeltmek için 'T00:00:00' ekleyin.
            $event->end = $satinal->tarih . 'T23:59:59'; // Tarih alanını düzeltmek için 'T23:59:59' ekleyin.
            $event->backgroundColor = 'green';
            $event->borderColor = 'green';
            $event->textColor = 'white';
            $events[] = $event;
        }

        return response()->json($events);
    }
}
