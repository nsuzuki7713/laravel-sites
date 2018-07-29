<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use App\Comment;

class DetailController extends Controller
{
    function index(Request $request, $id)
    {
        $item = Idea::find($id);
        $comments = Comment::where('relation_id', $id)->get();
        return view('detail', ['item'=>$item, 'comments'=>$comments]);
    }

    function post(Request $request, $id)
    {   
        $comment = new Comment();
        $comment->relation_id = $request->relation_id;
        $comment->comment = $request->comment;
        $comment->save();

        // $item = Idea::find($id);
        // return view('detail', ['item'=>$item]);
        return redirect('/detail/'.$request->relation_id);
    }
}
