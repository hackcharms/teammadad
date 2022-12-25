@extends('layouts.app',['active'=>'teamarea','title'=>'Team-Area'])
@section('content')
@include('layouts._index',['index'=>'TeamArea'])

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
            <h2>Leadership</h2>
        </div>
        {{-- @include('layouts._userAbout',[
        'name'=>'Zubair',
        'img'=>'person_1.jpg',
        'post'=>'Dev',
        'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
        distinctio recusandae doloribus ut fugit officia voluptate soluta'
        ])
        @include('layouts._userAbout',[
        'name'=>'Zubair',
        'img'=>'person_1.jpg',
        'post'=>'Dev',
        'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
        distinctio recusandae doloribus ut fugit officia voluptate soluta'
        ])
        @include('layouts._userAbout',[
        'name'=>'Zubair',
        'img'=>'person_1.jpg',
        'post'=>'Dev',
        'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
        distinctio recusandae doloribus ut fugit officia voluptate soluta'
        ]) --}}
    </div>
    <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
            <h2>District wise Auth</h2>
        </div>
        <div class="col-md-12 mb-5 text-center mt-5 justify-content-center d-flex">
        <form action="{{route('teamarea')}}" class="" method="get">
                <div class="form-group col-8">
                <label for="district">Select District {{old('district_code')}}</label>
                    <select class="form-control" name="district_code" id="district" onchange="this.form.submit();">
                        <option> Select District</option>
                      @foreach ($districts as $district)
                      <option value="{{$district->code}}" {{$district->code==$district_code?'selected':''}} >{{$district->name}}</option>
                      {{-- <option value="{{$district->code}}">{{$district->name}}</option> --}}
                      @endforeach
                    </select>
                  </div>
            </form>
        </div>
        @forelse ($members as $member)
            {{-- {!!print_r($member)!!} --}}
            @include('layouts._userAbout',['user'=>$member])
        @empty
            <li> No Member Found </li>
        @endforelse
        {{-- @include('layouts._userAbout',[
            'name'=>'Zubair',
            'img'=>'person_1.jpg',
            'post'=>'Dev',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
            distinctio recusandae doloribus ut fugit officia voluptate soluta'
            ])
        @include('layouts._userAbout',[
            'name'=>'Zubair',
            'img'=>'person_1.jpg',
            'post'=>'Dev',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
            distinctio recusandae doloribus ut fugit officia voluptate soluta'
            ]) --}}
    </div>
</div>

@endsection
