
@extends('layouts.app',['title'=>'Profile','active'=>''])
@section('content')
@include('layouts._index',['index'=>'Profile'])
<div class="row">
    <div class="container mt-4">
        @if (auth()->id()==$user->id && !auth()->user()->approved)
        <div class="alert alert-warning text-center" role="alert">
            You will be treat as Guset User until you get Approved. <br>
            Please wait, It take an average time of 1 or 2 working day to be approved. <br>
            In case you didn't get approved with in the time limit feel free to contact us via <a class="text-info" href="mailto:teammadad@info.com"> teammadad@info.com</a>
          </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h2>Profile
                    </h2>
                    <div class="d-flex justify-content-end ml-auto">
                        {{-- <a href="{{route('logout')}}" class="btn mr-3" style="background: #f7ca44">Logout</a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center mb-2">

                <img src="{{asset('/images/'.($user->profile_pic??'user.png'))}}" id="frame" alt="Profile Picture" class=" col-lg-6 card-img">
                </div>
                <div class="mt-4 d-flex justify-content-center col-12">
                   @can('update',auth()->user())
                   <form action="{{route('user.update',$user->username)}}" method="post" enctype="multipart/form-data">
                       @csrf
                       @method('PUT')
                       <div class="input-group">

                           <h4> <label for="profile_pic"> Set Profile Picture
                               <sub class="text-info">
                                   You will be able to Upload Profile Picture once.
                               </sub>
                               </label></h4>
                        </div>
                       <div class="input-group">
                           <div class="custom-file">
                               <div class="col-8">
                                   <input type="file" class="form-control @error('profile_pic') is-invalid @enderror" name="profile_pic" id="image" accept="image/*" onchange="loadImg(event)">
                                   @error('profile_pic')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- <label class="custom-file-label form-control @error('profile_pic') is-invalid @enderror" for="inputGroupFile04">Choose file</label> --}}
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary" type="button">Upload</button>
                                </div>
                           </div>
                         </div>
                   </form>
                   @endcan
                @if ($user->role!=0)
                <div class="alert alert-info text-center" role="alert">
                    @if($user->role>2 && $user->role<89)
                        {{$user->post.' '.$user->district->name}}
                    @elseif($user->role>89)
                        {{$user->post}}
                    @else
                        {{$user->post.' '.$user->college}}
                    @endif
                </div>
                @endif
                </div>
                <div class="mt-4 d-flex justify-content-center col-12">
                    <div>
                        <h2>
                            Details
                        </h2>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>College Name</td>
                                    <td>{{$user->college}}</td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td>{{$user->district->name}}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <h4>
                <span> Blogs by</span> <span>{{$user->name}}</span>
            </h4>
        </div>
        <div class="row">
            @foreach ($users_recent_blogs as $blog)
            @include('layouts._blog',['blog'=>$blog])
            @endforeach
        </div>
        <div class=" d-flex justify-content-end ml-auto mb-4 mr-4">
            <a href="{{route('user.blogs',[$user->username])}}" class="btn btn-primary"> All Blogs</a>
        </div>
    </div>
</div>
{{-- {!!print_r($user)!!} --}}
<script type="text/javascript">
    var loadImg=function(event){
        $('#frame').attr('src', URL.createObjectURL(event.target.files[0]));
    };
</script>
@endsection
