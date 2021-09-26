<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sitesetting;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sajidh\Dhivehidate\Dhivehidate;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::with('author', 'Category')->orderBy('created_at','desc')->paginate(5);
        return view('backend.video.index',compact('videos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function updateVideo(Request $request, $id)
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

        $video = Video::find($id);

        $video->author_id = $request->input('author_id');

        $video->title = $request->input('title');

        $video->category_id = $request->input('category_id');

        $video->url = $request->input('url');


        $video->status = $request->input('status');

        $video->image = $fileNameToStore;


        $save = $video->save();

        return redirect()->route('video')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('videos')->where('id',$id)->delete();

        return redirect()->route('video')->with('message','deleted Successfully');

    }

    public function createvideo()
    {
        $categories = Category::all();
        return view('backend.video.form',compact('categories'));
    }
    public function storevideo(Request $request)
    {
        if ($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/video', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpg';

        }

        $post = new Video;

        $post->author_id = $request->author_id;

        $post->title = $request->title;

        $post->url = $request->url;




        $post->category_id = $request->category_id;

        $post->status = $request->status;

        $post->image = $fileNameToStore;

        $save = $post->save();


        return redirect()->route('all-posts');


    }
    public function siglepost(Request $request, $id)
    {
        $sitesettings = Sitesetting::all();
        $date = new Dhivehidate();
        $post = Video::where('id',$id)->with('Category','author')->first();
        $allposts = Video::with('category','author')->orderBy('created_at','desc')->skip(1)->limit(4)->get();
        return view('frontend.video.single',compact('post','allposts','sitesettings','date'));
    }
    public function allpost()
    {
        $sitesettings = Sitesetting::all();
        $posts = Video::with('author', 'Category')->orderBy('created_at','desc')->paginate(5);
        return view('frontend.video.all',compact('posts','sitesettings'));
    }
    public function editVideo($id)
    {

        $video = Video::with('Category','author')->find($id);

        return view('backend.video.edit',compact('video'));
    }
}
