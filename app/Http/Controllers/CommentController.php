<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Blog $blog,Request $request)
    {
        $this->authorize('anything',auth()->user());
        $request->validate([
            'body'=>'required|string'
        ]);
        $comment= new Comment;
        $comment->user_id=auth()->id();
        $comment->blog_id=$blog->id;
        $comment->body=$request->body;
        $comment->save();
        return back()->with('success','Comment added');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug,Comment $comment)
    {
        $this->authorize('delete',$comment);
        $comment->delete();
        return back()->with('success','Comment Deleted');
    }
}
