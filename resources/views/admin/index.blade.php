@extends('layouts.app',['title'=>'adminPanel','active'=>''])
@section('content')
@include('layouts._index',['index'=>'Admin Panel'])

<div class="container mt-4">
    <div class="unapproved_users mb-4">
        <h3 class="row"> Unapproved Users</h3>
        <div class="user-list ">
            @forelse ($unapproved_users as $user)
                @include('admin._userlist',$user)
            @empty
            <h2> Non User To be Approve</h2>
            @endforelse
        </div>
    </div>
</div>
<hr>
<hr>
<div class="container">

    <div class="approved_users mb-4">
        <h3 class="row"> Approved Users</h3>
        <div class="user-list ">
            @forelse ($approved_users as $user)
                @include('admin._userlist',$user)
            @empty
            <h2> Non User To be Approve</h2>
            @endforelse        </div>
    </div>
</div>

@endsection
