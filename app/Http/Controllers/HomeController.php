<?php

namespace App\Http\Controllers;

use App\Bayaan;
use App\Post;
use App\Sitesetting;
use App\Slider;
use App\Tag;
use App\Video;

use Illuminate\Support\Facades\DB;
use Sajidh\Dhivehidate\Dhivehidate;
use Sajidh\Prayerscraper\Prayer;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $session = new SessionController();
        $posts = Post::with('Category','user')->orderBy('created_at','desc')->limit(3)->get();

        $allposts = Post::with('Category','user')->orderBy('created_at','desc')->skip(1)->limit(6)->get();
        $videos = Video::with('Category','user')->orderBy('created_at','desc')->limit(1)->get();
        $allvideos = Video::with('Category','user')->orderBy('created_at','desc')->skip(1)->limit(4)->get();
        $bayaans = Bayaan::with('Category','user')->orderBy('created_at','desc')->limit(4)->get();
        $slides = Slider::all();
        $sitesettings = Sitesetting::all();

        $rihas = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->limit('4')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ރިހަ')
            ->get();

        $hedhikas = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->limit('4')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ހެދިކާ')
            ->get();
        $baiys = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->limit('4')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ބަތް')
            ->get();

        $events = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->limit('2')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ޕްރޮގްރާމް')
            ->get();
        $date = new Dhivehidate();

        return view('frontend.index',
            compact
            (
                'posts',
                    'allposts',
                    'videos',
                    'allvideos',
                    'bayaans',
                    'slides',
                    'sitesettings',
                    'rihas',
                    'hedhikas',
                    'baiys',
                    'events','date','session'
            ));
    }
    public function tag(Tag $tag){
        $date = new Dhivehidate();
        $posts = $tag->posts;
        return view('frontend.filter.tag',compact('posts','date'));
    }
    public function unknown()
    {
        $posts = Post::with('tags','Category')->get();
        $id = count($posts);
        $randomPost = rand(1,$id);
        $post = Post::with('tags','Category')->where('posts.id', '=', $randomPost)->get();
        $date = new Dhivehidate();
//        dd($post) ;
        return view('frontend.filter.neyngunu',compact('post','date'));
    }
    public function habaru(){
        if (Request::get('sort') == 'age' )
        {
            $habarus = Post::with('tags','Category')->OrderBy('created_at','ASC')->get();
        }else{
            $habarus = DB::table('posts')
                ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
                ->orderBy('created_at','desc')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->join('users', 'posts.user_id', '=', 'users.id')

                ->where('categories.name', '=','ރިހަ')
                ->get();
        }

        $sitesettings = Sitesetting::all();
        $date = new Dhivehidate();


            return view('frontend.habaru.index',compact('habarus','sitesettings','date'));
    }
    public function report(){
        $sitesettings = Sitesetting::all();

        $habarus = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->limit('4')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ރިޕޯޓު')
            ->get();

        return view('frontend.report.index',compact('habarus','sitesettings'));
    }
    public function event(){
        $sitesettings = Sitesetting::all();

        $habarus = DB::table('posts')
            ->select('posts.user_id','posts.title','posts.body','posts.image','posts.status','posts.category_id','posts.category_id','posts.id','users.name','posts.created_at')
            ->orderBy('created_at','desc')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')

            ->where('categories.name', '=','ޕްރޮގްރާމް')
            ->get();

        return view('frontend.event.index',compact('habarus','sitesettings'));
    }
    public function bayaan(){
        $sitesettings = Sitesetting::all();

        $habarus = Bayaan::with('category','author')->orderBy('created_at','desc')->get();

        return view('frontend.bayaan.index',compact('habarus','sitesettings'));
    }

    public function video(){
        $sitesettings = Sitesetting::all();

        $habarus = Video::with('category','author')->orderBy('created_at','desc')->get();

        return view('frontend.video.index',compact('habarus','sitesettings'));
    }
}
