<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','authAdmin']);
    }
    public function index()
    {
        $unapproved_users=User::where('approved','0')->orderBy('updated_at','DESC')->take(10)->get();
        $approved_users=User::where('approved','1')->orderBy('updated_at','DESC')->take(10)->get();
        return view('admin.index',\compact(['unapproved_users','approved_users']));
    }
    public function approve(Request $request,User $user)
    {
        $validated=$request->validate([
            'approved'=>'required|integer|max:1|min:0'
        ]);
        if($request->approved==1)
        {
        $user->approved=1;
        $user->save();
        }
        else
        {
            $user->approved=0;
            $user->save();
        }
        return back();
    }
    public function role(Request $request, User $user)
    {
        // dd($user->role);
        $validated=$request->validate([
            'role'=>'required|integer|max:99|min:0'
        ]);
        if($validated)
        {
            $user->role=$request->role;
            $user->save();
            return back();
        }
    }
}
