<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use Illuminate\Support\Facades\Session;
use App\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
//    public function getSessionData(Request $request){
//        $sitesettings = Sitesetting::all();
//
//        if ($request->session()->has('data'))
//        {
//            $carts = $request->session()->get('data');
//
//
//            return view('frontend.cart.cart',compact('carts','sitesettings'));
//        }else{
//            echo 'no session inttha session';
//        }
//    }
//
//    public function storeSessionData(Request $request,$id){
//        $post[] = Post::find($id);
//        $ip = $request->ip();
//        array_push($post,$ip);
//        session()->put('data',$post);
//        echo 'session addad';
//    }
//
//    public function deleteSessionData(Request $request){
//        $request->session()->forget('name');
//        echo 'delete';
//    }


//    public function getAddToCart(Request $request,$id){
//        $post = Post::find($id);
//        $oldCart = Session::has('cat') ? Session::get('cart') : null;
//        $cart = new Cart($oldCart);
//        $cart->add($post, $post->id);
//
//        $request->session()->put('cart',$cart);
//
//        return redirect()->route('Home');
//    }

    public function getAddToCart($id)
    {
        $post = Post::find($id);
        if(!$post) {
            abort(404);
        }
        $c = session()->get('c');
        // if cart is empty then this the first product
        if(!$c) {
            $c = [
                $id => [
                    "title" => $post->title,
                    "quantity" => 1,
                    "image" => $post->image,
                    "body" => $post->body,
                    "ingredients" => $post->ingredients
                ]
            ];
            session()->put('c', $c);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($c[$id])) {
            $c[$id]['quantity']++;
            session()->put('c', $c);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $c[$id] = [
            "title" => $post->title,
            "quantity" => 1,
            "image" => $post->image,
            "body" => $post->body,
            "ingredients" => $post->ingredients
        ];
        session()->put('c', $c);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $c = session()->get('c');
            if(isset($c[$request->id])) {
                unset($c[$request->id]);
                session()->put('c', $c);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function getWishlist(){
//        if (!Session::has('cart')){
//            return view('frontend.cart.cart');
//        }
//        $oldCart = Session::get('cart');
//        $cart = new Cart($oldCart);

        return view('frontend.cart.cart');
    }
}
