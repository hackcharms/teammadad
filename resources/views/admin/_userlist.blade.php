<div class="row border border-black">
    <div class="col-sm-12 col-md-12 col-lg-6 user-details float-left">
    <a href="{{$user->profile_url}}">
            <div class=" d-flex">
                <div class="image">
                    <img src="{{asset('/images/'.$user->profile_pic)}}" alt="{{$user->name}}"
                        class="profile-circle">
                </div>
                <div class="col-8 text-center">
                    <h2>
                        {{$user->name}}
                    </h2>
                    <span class="text-dark">
                        @if($user->role==0 ||$user->role>2)
                        {{$user->post.' '.$user->district->name}}
                        @else
                        {{$user->post.' '.Str::limit($user->college,25)}}
                        @endif
                    </span>

                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center mt-4">
        <form action="{{route('adminPanel.approve',$user->username)}}" method="post">
            @csrf
            <input type="hidden" name="approved" value="@if(!$user->approved){{'1'}}@else{{'0'}}@endif">
            <button class="btn btn-success">@if(!$user->approved){{'Approve'}} @else {{'Refuse'}} @endif</button>
        </form>
        <form action="{{route('adminPanel.role',$user->username)}}" class="" method="post">
            @csrf
            @method('POST')
            <select class="btn col-6" name="role" id="">
                <option value=""> SELECT</option>
                <option value="7">जिला संचालक</option>
                <option value="6">जिला अध्यक्ष</option>
                <option value="5">जिला उपाध्यक्ष</option>
                <option value="4">जिला सचिव</option>
                <option value="3">जिला कोषाध्यक्ष</option>
                <option value="2">संस्था अध्यक्ष</option>
                <option value="1">संस्था उपाध्यक्ष</option>
                <option value="0">User</option>
            </select>
            <input type="submit" value="Set Post" class="btn btn-dark">
        </form>
    </div>
</div>
