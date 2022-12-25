@extends('layouts.app',['title'=>$blog->title])
@section('content')
    @include('layouts._index')
    {{-- {{$blog->image}}
    {{$blog->title}} --}}
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                    {{-- <div class="card-header">

                    </div> --}}
                <div class="card-body">
                    <h1>
                        {{Str::title($blog->title)}}
                    </h1>
                    <div class="d-flex justify-content-end muted mt-0">
                        <span class="icon-calendar mr-2" ></span><span>{{$blog->created_date}}</span>
                        <a href="{{$blog->user->profile_url}}" class="ml-4 text-black-50"><span class="icon-user mr-2 "></span><span>{{$blog->user->name}}</span></a>
                        @can('update', $blog)
                        <a href="{{route('blog.edit',$blog)}}" class="btn btn-primary ml-4">edit blog</a>
                        @endcan
                        @can('delete', $blog)
                        <button type="Button" class="btn btn-primary ml-4" onclick="if(confirm('Do you want to delete?')){$('#delete-blog-{{$blog->id}}').submit()}else{return false;}">Delete blog</button>
                        <form id="delete-blog-{{$blog->id}}" action="{{route('blog.destroy',$blog)}}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                        @endcan

                    </div>
                    <hr>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="col-8 ">
                            <img src="{{asset('/images/'.$blog->image)}}" alt="" class="card-img">
                        </div>

                        </div>
                        {{-- <div class="adv mt-4 mb-4" style="height:100px; border:2px solid red;overflow:hidden">
                            here will be advertisement
                        </div> --}}
                    <div class="card-text blog-text">
                        <p>
                        {!!$blog->html_body!!}</p>
                        {{-- <div class="adv mt-4 mb-4" style="height:100px; border:2px solid red;overflow:hidden">
                            here will be advertisement
                        </div> --}}
                    </div>
                </div>
            </div>
            <hr>
        </div>
        @include('layouts._message')
        <div class="comment">
            <hr>
            <h1>Comments</h1>
            <hr>
            <hr>
            <div class="comment-content  mb-4">
                @forelse ($blog->comments as $comment)
                <div class="d-flex mt-2">
                    <div class="col-4 col-sm-4 col-md-3 ">
                        <div class="text-center">
                        <a href="{{$comment->user->profile_url}}">
                            <img src="{{asset('/images/'.$comment->user->profile_pic)}}" alt="{{$comment->user->name}}" class="profile-circle" >
                        </a>
                        {{-- <p class="text-start"> --}}
                            <div class="meta" style="font-size: .8em;">
                            <a style="cursor: pointer"><span class="icon-calendar"></span> {{$comment->created_date}}</a><br>
                            <a href="{{$comment->user->profile_url}}" style="color: black;"><span class="icon-person"> </span>{{$comment->user->name}}</a>
                            </div>
                        {{-- </p> --}}
                        </div>
                </div>
                    <div class="col-8 col-sm-8 col-md-9">
                        <div class="container">
                            <div class=" border border-dark rounded" style="padding: 1%">
                              <p class="para">
                                  {!!$comment->html_body!!}
                              </p>
                            </div>
                            <div class="d-flex justify-content-end ml-auto mt-4 mb-4">

                                @can('delete', $comment)
                                <button type="button" class="btn btn-sm text-light " onclick="if(confirm('Do you want to delete?')){$('#delete-comment-{{$comment->id}}').submit()}else{return false;}" style="background: rgb(148, 20, 20)"
                                   > Delete</button>
                            <form id="delete-comment-{{$comment->id}}" class="form-delete" method="POST"
                                    action="{{route('comment.destroy',[$blog->slug,$comment])}}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @empty
                <div class="alert alert-danger text-center" role="alert">
                    No comments Available
                  </div>
                @endforelse
                @can('create-comment',auth()->user())
                <div class="d-flex mt-2">
                    <div class="col-4 col-sm-4 col-md-3 ">
                        <div class="text-center">

                        <a href="{{__('#')}}">
                            @auth
                            <img src="{{asset('/images/'.auth()->user()->profile_pic)}}" alt="{{auth()->user()->name}}" class="profile-circle" >
                            {{-- @else
                            <img src="{{asset('/images/user.png')}}" alt="annynamous" class="profile-circle" > --}}
                            @endauth
                        </a>
                        {{-- <p class="text-start"> --}}
                            <div class="meta" style="font-size: .8em; ">
                            <a style="cursor: pointer; padding:2%" @auth href="{{ auth()->user()->profile_url}}"@endauth style="color: black;"><span class="icon-person"> </span>@auth{{ auth()->user()->name}} @else {{'Anynnomous'}}@endauth</a>
                            </div>
                        {{-- </p> --}}
                        </div>
                </div>
                    <div class="col-8 col-sm-8 col-md-9">
                        <div class="container">
                            <div class="rounded" style="">
                            <form action="{{route('comment.store',$blog->slug)}}" method="POST">
                                {{-- @method('POST') --}}
                                @csrf
                                    <textarea name="body" style="width: 100%; padding: 1%;" id="" cols="30" rows="5">{{old('body')}}</textarea>
                                  <div class="d-flex justify-content-end ml-auto mt-4 mb-4">
                                  <button type="submit" class="btn btn-primary">Comment</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
