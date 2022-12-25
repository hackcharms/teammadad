<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Helper\HtmlFormatter;

class BlogController extends Controller
{
    protected $fillable=['title','body'];

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::latest()->paginate('6');
        // dd($blogs);
        return(view('blogs.index',compact('blogs')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('anything',auth()->user());
        return \view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $this->authorize('anything',auth()->user());
        $blog=new Blog;
        $blog->user_id=auth()->id();
        $blog->title=$request->title;
        $blog->body=$request->body;
        if($request->image){
            $imageName = auth()->id().'_'.time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $blog->image=$imageName;
        }
        $blog->save();
        return redirect()->route('blog.index')
        ->with("Success!!","Blog Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // $blog->body=HtmlFormatter::format($blog->body);
        // $body=htmlspecialchars($blog->body);
        return view('Blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $this->authorize('update',$blog);
        return view('Blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update',$blog);
        $blog->update($request->only('title','body'));
        return redirect()->route('blog.show',$blog->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // dd($blog);
        $this->authorize('delete',$blog);
        $blog->delete();
        return redirect()->route('blog.index')->with('success','Blog Deleted');
    }
}
