<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Thaana\Thaana;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('backend.tag.index',compact('tags'));
    }
    public function storeTag(Request $request)
    {


        $tag = new Tag;

        $tag->name = $request->name;
        $tag->slug = $request->slug;

        $save = $tag->save();


        return redirect()->route('all-tags');


    }
    public function createTag()
    {
        $tags = Tag::all();
        return view('backend.tag.form',compact('tags'));
    }
    public function editTag($id)
    {

        $tag = Tag::find($id);

        return view('backend.tag.edit',compact('tag'));
    }
    public function updateTag(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->input('name');
        $tag->save();
        return redirect()->route('all-tags')->with('message','Updated Successfully');
    }
    public function destroy( $id)
    {
        DB::table('tags')->where('id',$id)->delete();

        return redirect()->route('all-tags')->with('message','deleted Successfully');

    }
}
