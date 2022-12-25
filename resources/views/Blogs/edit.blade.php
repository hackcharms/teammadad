@extends('layouts.app',['title'=>'Edit Blog','active'=>'blogs'])
@section('content')
@include('layouts._index',['index'=>'Edit Blog'])
{{-- {{$blog->image}}
{{$blog->title}} --}}
<div class="container mt-4" >
    <div class="row">
        <div class="card mb-4" style="width: 100%">
            <div class="card-header">
                <div class="d-flex align-items-center">
                <h2>Create Blog
                    </h2>
                    <div class="d-flex justify-content-end ml-auto">
                        <a href="{{route('blog.index')}}" class="btn mr-3" style="background: #f7ca44">Back to Blogs</a>
                    </div>
                </div>
            </div>
            {{-- {!!print_r($errors)!!}
            @if ($errors->has('title'))
                {{$errors->title->first()}}
            @endif --}}
            <div class="card-body" >
                <div class="d-flex justify-content-center mb-4">
                    <div class="col-8 ">
                    <img src="{{asset('/images/'.$blog->image)}}" id="frame" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-text blog-text">
                <form action="{{route('blog.update',$blog)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- <div class="form-group row">
                        <label for="image" class="col-form-label text-md-right">{{ __('Select Image') }}</label>
                        <input type="file" name="image" class=" form-control @error('image') is-invalid @enderror" value="{{old('image')}}" id="image" accept="image/*" onchange="loadImg(event)">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                    <div class="form-group row">
                    <h2>
                        <label for="image" class="col-form-label text-md-right">{{ __('Title of Blog') }}</label>
                    </h2>
                    <textarea name="title" class="form-control @error('title') is-invalid @enderror" id="" style="width: 100%" cols="30" rows="3">{{$blog->title}}</textarea>
                    @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <h2>
                            <label for="image" class="col-form-label text-md-right">{{ __('Body of Blog') }}</label>
                    </h2>
                    <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="" style="width: 100%" cols="30" rows="12">{{$blog->body}}</textarea>
                        @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<script type="text/javascript">
    var loadImg=function(event){
        $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
    };
</script>
@endsection
