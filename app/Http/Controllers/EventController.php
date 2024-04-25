<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $events = Event::all();
        }

        $count = count($events);

        

        return view('welcome',['events' => $events, 'search' => $search, 'count' => $count]);

    }

    public function create(){
        return view ('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }

    public function destroy($id){
            Event::findOrFail($id) ->delete();
            return redirect('/')->with('mgs', 'Evento excluido com sucesso!');
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request, $id){
        $event = Event::findOrFail($id);
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->save();
        return redirect('/')->with('msg', 'Evento editado com sucesso!');
    }
}
