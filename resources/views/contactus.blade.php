@extends('layouts.app',['active'=>'contactus','title'=>'Contact-Us'])
@section('content')
@include('layouts._index',['index'=>'Contact-Us'])
<div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        {{-- <div class="col-md-6" id="map"></div> --}}
      </div>
    </div>
  </div>
@endsection
