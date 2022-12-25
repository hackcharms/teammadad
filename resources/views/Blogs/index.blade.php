@extends('layouts.app',['title'=>'Blogs','active'=>'Blogs'])
@section('content')
@include('layouts._index',['index'=>'Blogs'])
<div class="site-section bg-light">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                <h2>Blogs
                    @if ($blogs_by??false)
                        by {{$blogs_by}}
                    @endif
                    </h2>
                    <div class="d-flex justify-content-end ml-auto">
                        @if ($blogs_by??false)
                        <a href="{{route('blog.index')}}" class="btn mr-3" style="background: #f7ca44">Back to Blogs</a>
                        @else
                        <a href="{{route('blog.create')}}" class="btn mr-3
                         @can('anything',auth()->user())
                         @else disabled
                         @endcan

                         " style="background: #f7ca44">Write Blogs</a>
                        @endif
                        @auth

                            <div class="dropdown show ml-auto">
                                <a class="btn btn-secondary dropdown-toggle text-black-50" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{Auth::user()->profile_url}}">Profile</a>
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                                </div>
                            </div>
                        @else
                            <a href="{{route('login')}}" title="Login to write Blogs" class=" btn btn-secondary ml-4 text-black-50" >Login</a>
                            <a href="{{route('register')}}" class="btn btn-secondary ml-4 text-black-50">Register</a>
                        @endauth
                    </div>

                </div>
            </div>
        </div>
        @include('layouts._message')
      <div class="row">
        @foreach ($blogs as $blog)
            @include('layouts._blog',['blog'=>$blog])
            @endforeach
        </div>
        <div class="row justify-content-center"></div>
        {{$blogs->links()}}
    </div>
  </div>
@endsection
