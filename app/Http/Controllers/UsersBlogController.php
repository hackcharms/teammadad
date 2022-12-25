<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;


class UsersBlogController extends Controller
{
    public function __invoke(User $user)
    {
        $blogs=Blog::where('user_id',$user->id)->latest()->paginate(12);
        $blogs_by=$user->name;
        return \view('Blogs.index',\compact('blogs','blogs_by'));
    }
}
