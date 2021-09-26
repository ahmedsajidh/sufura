<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Ingredient;
use App\Post;
use App\Sitesetting;
use App\Tag;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sajidh\Dhivehidate\Dhivehidate;
use Thaana\Thaana;
use willvincent\Rateable\Rating;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::with('user', 'Category')->orderBy('created_at','desc')->paginate(5);
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.form',compact('categories','tags'));
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

        $post = Post::create([
            'user_id'           => request('user_id'),
            'title'    => request('title'),
            'tag_id'        => request('tag_id'),
            'body'        => request('body'),
            'category_id'        => request('category_id'),
            'status'        => request('status'),
            'image'        =>  $fileNameToStore,
        ]);


        $save = $post->save();

        $string = strval($post->id);
        $post->tags()->sync($request->tags);
        if($request->ajax())
        {
            $rules = array(
                'name.*'  => 'required',
                'qty.*'  => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }

            $name = $request->name;
            $qty = $request->qty;
            $post_id = $post->id;


            for($count = 0; $count < count($name); $count++)
            {
                $data = array(
                    'name' => $name[$count],
                    'qty'  => $qty[$count]

                );
                $data["post_id"] = $post_id;
                $insert_data[] = $data;
            }

            Ingredient::insert($insert_data);

            return response()->json([
                'success'  => 'Data Added successfully.',
                'image' => "public/image/'.$fileNameToStore.'"
            ]);
        }

        return redirect()->route('all-posts');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        DB::table('posts')->where('id',$id)->delete();

        return redirect()->route('all-posts')->with('message','deleted Successfully');

    }
    public function editPost($id)
    {
        $categories = Category::with('posts')->get();
        $tags = Tag::with('Posts')->get();
        $post = Post::with('Category','ingredients')->find($id);


        return view('backend.post.edit',compact('post','categories','tags'));
    }
    public function updatePost(Request $request, $id)
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
        $post = Post::find($id);

        $post->user_id = $request->input('user_id');

        $post->title = $request->input('title');


        $post->body = $request->input('body');

        $post->category_id = $request->input('category_id');

        $post->status = $request->input('status');

        $post->image = $fileNameToStore;

        $save = $post->save();

        $string = strval($post->id);
        $post->tags()->sync($request->tags);
        if($request->ajax())
        {
            $rules = array(
                'name.*'  => 'required',
                'qty.*'  => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }

            $name = $request->name;
            $qty = $request->qty;
            $post_id = $post->id;


            for($count = 0; $count < count($name); $count++)
            {
                $data = array(
                    'name' => $name[$count],
                    'qty'  => $qty[$count]

                );
                $data["post_id"] = $post_id;
                $insert_data[] = $data;
            }

           Ingredient::insert($insert_data);

            return response()->json([
                'success'  => 'Data Added successfully.',
                'image' => "public/image/'.$fileNameToStore.'"
            ]);
        }

        return redirect()->route('all-posts')->with('message','Updated Successfully');
    }

    public function siglepost(Request $request, $id)
    {
        $sitesettings = Sitesetting::all();
        $comments  = Comment::with('post')->get();
        $thaana = new Thaana();
        $date = new Dhivehidate();
        $post = Post::where('id',$id)->with('Category','user')->first();

        return view('frontend.dheeneepost.single',compact('post','sitesettings','date','comments','thaana'));
    }

    public function allpost()
    {
        $sitesettings = Sitesetting::all();
        $posts = Post::with('user', 'Category')->orderBy('created_at','desc')->paginate(5);
        return view('frontend.dheeneepost.all',compact('posts','sitesettings'));
    }
    public function postPost(Request $request)

    {
        request()->validate(['rate' => 'required']);

        $post = Post::find($request->id);


        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;

        $rating->post_id = $request->post_id;


        $post->rateOnce($rating->rating);

            return redirect()->back();





    }


}
