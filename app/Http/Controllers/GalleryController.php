<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Gallery::latest()->paginate(20);
        return \view('gallery',compact('images'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin-work',auth()->user());

        $request->validate([
            'image'=>'required|image|max:2048'
        ]);
        // dd($request->image);
        $image=new Gallery;
        $imageName = auth()->id().'_'.time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $image->created_at=now();
        $image->name=$imageName;
        $image->save();
        return back()->with('success','Image Uploaded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $this->authorize('admin-work',auth()->user());
        // dd($gallery->name);
        $file_path = "images/$gallery->name";
        if(file_exists($file_path))
        {
           unlink($file_path);
           $gallery->delete();
        }
        return back();
    }
}
