<?php

namespace App\Http\Controllers;

use App\Event;
use App\Form;
use App\Sitesetting;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitesettings = Sitesetting::all();
        $events = Event::all();
        return view('frontend.form.index',compact('sitesettings','events'));
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
    public function store(Request $request)
    {

        $form = new Form;


        $form->fullname = $request->fullname;


        $form->idcard = $request->idcard;

        $form->date = $request->date;

        $form->address = $request->address;

        $form->phone = $request->phone;

        $form->event_id = $request->event_id;


        $save = $form->save();


        return redirect()->route('form')->with('message','ތިޔަ ކުރެއްވި ރިކުއެސްޓް އަޅުގަނޑުމެންނައް ލިބިއްޖެ..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
