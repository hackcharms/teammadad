@extends('layouts.app',['title'=>'Gallery','active'=>'gallery'])
@section('content')
@include('layouts._index',['index'=>'Gallary'])
<div class="site-section">
    @can('admin-work',auth()->user())
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="mr-4">
                <h2> Upload Images</h2>
            </div>
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        placeholder="Select Image" accept="image/*" multiple>
                    <div class="input-group-append">
                        <button class="btn btn-secondary text-dark" type="sumit">Upload</button>
                    </div>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
            </form>
        </div>
    </div>
    @endcan
    <div class="container">
        <div class="row">
            @forelse ($images as $image)
            <div class="col-md-4 mb-4">
                <a href="{{asset('images/'.$image->name)}}" class="img-hover" data-fancybox="gallery">
                    <span class="icon icon-search"></span>
                    <img src="{{asset('images/'.$image->name)}}" alt="Image placeholder" class="img-fluid">
                </a>
                @can('admin-work',auth()->user())
                <span class="opration d-flex">
                <button type="button" onclick="if(confirm('Do you want to delete?')){$('#delete-image-{{$image->id}}').submit()}else{return false;}" class="btn btn-outline-secondary bg-danger ml-auto">Delete</button>
                    <form id="delete-image-{{$image->id}}" action="{{route('gallery.destroy',$image)}}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </span>
                @endcan
            </div>
            @empty
            <div class="alert alert-info text-center" role="alert">
                No Images Has been Added Yet.
            </div>
            @endforelse

        </div>
        {{$images->links()}}
    </div>
</div>
@endsection
