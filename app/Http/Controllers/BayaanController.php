<?php

namespace App\Http\Controllers;

use App\Bayaan;
use App\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sajidh\Dhivehidate\Dhivehidate;

class BayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayaans = Bayaan::with('author')->orderBy('created_at','desc')->paginate(5);
      return view('backend.bayaan.index',compact('bayaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bayaan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/file', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }
        if ($request->hasFile('image')){
            $filenameWithExt1 = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore1);

        }else{
            $fileNameToStore1 ='noimage.jpg';

        }

        $post = new Bayaan;


        $post->title = $request->title;

        $post->author_id = $request->author_id;

        $post->status = $request->status;

        $post->file = $fileNameToStore;

        $post->image = $fileNameToStore1;

        $save = $post->save();


        return redirect()->route('bayaan');


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Bayaan  $bayaan
     * @return \Illuminate\Http\Response
     */
    public function show(Bayaan $bayaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bayaan  $bayaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayaan $bayaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bayaan  $bayaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayaan $bayaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bayaan  $bayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('bayaans')->where('id',$id)->delete();

        return redirect()->route('bayaan')->with('message','deleted Successfully');

    }
    public function siglepost(Request $request, $id)
    {
        $sitesettings = Sitesetting::all();
        $date = new Dhivehidate();
        $post = Bayaan::where('id',$id)->first();
        return view('frontend.bayaan.single',compact('post','sitesettings','date'));
    }
    public function allbayaan()
    {
        $sitesettings = Sitesetting::all();
        $date = new Dhivehidate();
        $bayaans = Bayaan::with('author')->orderBy('created_at','desc')->paginate(5);
        return view('frontend.bayaan.all',compact('bayaans','sitesettings','date'));
    }
    public function editBayaan($id)
    {

        $bayaan = Bayaan::with('Category')->find($id);

        return view('backend.bayaan.edit',compact('bayaan'));
    }
    public function updateBayaan(Request $request, $id)
    {
        if ($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/file', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }
        if ($request->hasFile('image')){
            $filenameWithExt1 = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore1);

        }else{
            $fileNameToStore1 ='noimage.jpg';

        }

        $bayaan = Bayaan::find($id);

        $bayaan->author_id = $request->input('author_id');

        $bayaan->title = $request->input('title');


        $bayaan->status = $request->input('status');

        $bayaan->file = $fileNameToStore;

        $bayaan->image = $fileNameToStore1;

        $save = $bayaan->save();

        return redirect()->route('bayaan')->with('message','Updated Successfully');
    }
}
