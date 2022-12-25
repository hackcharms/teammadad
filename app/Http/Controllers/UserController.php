<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(User $user)
    {
        $users_recent_blogs=$user->blogs->sortByDesc('created_at')->take(3);
        return view('user',compact(['user','users_recent_blogs']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // return $user;
        return view('user',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // \dd($request->file('profile_pic'));
        $validated=$request->validate([
            'profile_pic'=>'required|max:2048|min:10|image|mimes:jpeg,bmp,png,gif,jpe,jpg'
        ]);
        if($validated){
            $imageName = auth()->user()->username.'_'.time().'.'.request()->profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path('images'), $imageName);
            $user->profile_pic=$imageName;
            $user->save();
        }
        return \back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
