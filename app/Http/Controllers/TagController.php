<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tag.list', ['tags' => $tags]);
    }

    /**
     * Add a new tag
     */
    public function create(Request $request)
    {
        $tag = new Tag();

        $tag->user_id = $request->user_id;
        $tag->name = $request->name;
        if($request->color) {
            $tag->color = $request->color;
        }

        $tag->save();
        return redirect()->back();
    }

}
