<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use willvincent\Rateable\Rateable;

class UserController extends Controller
{
    public function index()
    {
       $recepies = Post::whereHas('Category', function ($query) {
            return $query->where([['user_id','=',Auth::user()->id]]);
        })->orderBy('created_at','DESC')->paginate('5');
        return view('user.index',compact('recepies'));
    }
    public function form()
    {
        $categories = Category::all();

        return view('user.recipe.form',compact('categories'));
    }

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

        $post = new Post;

        $post->user_id = Auth::user()->id;

        $post->title = $request->title;


        $post->body = $request->body;

        $post->ingredients = $request->ingredients;

        $post->category_id = $request->category_id;

        $post->status = 0;

        $post->image = $fileNameToStore;

        $save = $post->save();


        return redirect()->route('userDashboard');


    }
    public function editPost($id)
    {
        $categories = Category::with('posts')->get();
        $post = Post::with('Category')->find($id);
        if ($post->user_id !== Auth::user()->id)
        {
            abort(404);
        }else{
            return view('user.recipe.edit',compact('post','categories'));
        }
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

        $post->user_id = Auth::user()->id;

        $post->title = $request->input('title');


        $post->body = $request->input('body');

        $post->category_id = $request->input('category_id');

        if ($request->has('image')){
            $post->image = $fileNameToStore;
        }else{
            $post->image = $post->image;
        }

        $save = $post->save();

        return redirect()->route('recipeForm')->with('message','Updated Successfully');
    }
    public function destroy( $id)
    {
        DB::table('posts')->where('id',$id)->delete();

        return redirect()->route('userDashboard')->with('message','deleted Successfully');

    }
    public function userProfile($id){
//        $user = User::find($id);
        $users = User::find($id)->withCount(['ratings as average_rating' => function($query) {
            $query->select(DB::raw('coalesce(avg(rating),0)'));
        }])->orderByDesc('average_rating')->get();
        foreach ($users as $user) {
            $data[] = $user->average_rating;
        }
         $userrating = array_sum($data);
//      $posts = Post::with('ratings')->get();


        return view('frontend.profile.index', compact('userrating'));
    }

}
