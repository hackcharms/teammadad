<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\District;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // $recent_blogs=Blog::latest()->take(3)->get() ;
        // echo '<pre>';
        // print_r($recent_blogs);

        // foreach($recent_blogs as $blog)
        // {
        //     print_r($blog);
        // }
        // exit;
        return view('teammadad');
    }
    public function contactUs()
    {
        return view('contactus');
    }
    public function teamarea(Request $request)
    {
        // dd($request->district_code);
        $validated=$request->validate([
            'district_code'=>'integer|max:100|min:11'
        ]);
        if($request->district_code && $validated){
            $members=User::where('district_code',$request->district_code)
            // ->Where('role','>',0)
            ->get();
            $district_code=$request->district_code;

        }
        else
        {

            $members=[];
            $district_code=false;

        }
        // $leaders=
        $districts=District::orderBy('name','ASC')->get();
        return \view('teamarea.index',compact(['districts','members','district_code']));
    }
    // public function gallery()
    // {
    //     return \view('gallery');
    // }
}
