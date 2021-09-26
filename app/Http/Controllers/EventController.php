<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.eventcreate.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEvent(Request $request)
    {


        $event = new Event;

        $event->name = $request->name;

        $save = $event->save();


        return redirect()->route('dashboard-events');


    }
    public function createEvent()
    {
        $events = Event::all();
        return view('backend.eventcreate.form',compact('events'));
    }
    public function editEvent($id)
    {

        $event = Event::find($id);

        return view('backend.eventcreate.edit',compact('event'));
    }
    public function updateEvent(Request $request, $id)
    {
        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->save();
        return redirect()->route('dashboard-events')->with('message','Updated Successfully');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('events')->where('id',$id)->delete();

        return redirect()->route('dashboard-events')->with('message','deleted Successfully');

    }
}
