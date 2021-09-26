<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::with('author')->orderBy('created_at','desc')->paginate(5);
        return view('backend.slider.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slides = Slider::all();
        return view('backend.slider.form',compact('slides'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }

        $Sliders = new Slider;

        $Sliders->author_id = $request->author_id;

        $Sliders->title = $request->title;

        $Sliders->secondtitle = $request->secondtitle;

        $Sliders->status = $request->status;

        $Sliders->image = $fileNameToStore;

        $save = $Sliders->save();


        return redirect()->route('slider-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function updateSlide(Request $request, $id)
    {
        if ($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }
        $slide = Slider::find($id);
dd($slide->id);
        $slide->author_id = $request->input('author_id');

        $slide->title = $request->input('title');

        $slide->secondtitle = $request->input('secondtitle');

        $slide->status = $request->input('status');

        $slide->image = $fileNameToStore;

        $save = $slide->save();

        return redirect()->route('slider-index')->with('message','Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('sliders')->where('id',$id)->delete();

        return redirect()->route('slider-index')->with('message','deleted Successfully');

    }
    public function editSlide($id)
    {

        $slide = Slider::with('author')->find($id);

        return view('backend.slider.edit',compact('slide'));
    }
}
