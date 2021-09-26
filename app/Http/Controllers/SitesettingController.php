<?php

namespace App\Http\Controllers;

use App\Sitesetting;
use Illuminate\Http\Request;

class SitesettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editSitesetting($id)
    {
        $setting = Sitesetting::find($id);

        return view('backend.sitesetting.index',compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function show(Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitesetting $sitesetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function updateSitesetting(Request $request, $id)
    {
        if ($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/sitesetting', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }
        if ($request->hasFile('fevicon')){
            $filenameWithExt1 = $request->file('fevicon')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $extension = $request->file('fevicon')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('fevicon')->storeAs('public/sitesetting', $fileNameToStore1);

        }else{
            $fileNameToStore1 ='noimage.jpg';

        }
        if ($request->hasFile('footerlogo')){
            $filenameWithExt2 = $request->file('footerlogo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            $extension = $request->file('footerlogo')->getClientOriginalExtension();
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('footerlogo')->storeAs('public/sitesetting', $fileNameToStore2);

        }else{
            $fileNameToStore2 ='noimage.jpg';
        }
        if ($request->hasFile('help')){
            $filenameWithExt3 = $request->file('help')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
            $extension = $request->file('help')->getClientOriginalExtension();
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            $path = $request->file('help')->storeAs('public/sitesetting', $fileNameToStore3);

        }else{
            $fileNameToStore3 ='noimage.jpg';
        }
        $post = Sitesetting::find($id);

        $post->sitetitle = $request->input('sitetitle');

        $post->number = $request->input('number');

        $post->sitedescription = $request->input('sitedescription');

        $post->email = $request->input('email');

        $post->footercopyright = $request->input('footercopyright');


        $post->fburl = $request->input('fburl');

        $post->logo = $fileNameToStore;
        $post->fevicon = $fileNameToStore1;
        $post->footerlogo = $fileNameToStore2;
        $post->help = $fileNameToStore3;

        $save = $post->save();

        return redirect()->route('sitesetting-edit',['id' => 1])->with('message','Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sitesetting  $sitesetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitesetting $sitesetting)
    {
        //
    }
}
