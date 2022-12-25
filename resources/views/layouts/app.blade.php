<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title??'Team-Madad'}}</title>

        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="/images/teamLog.png"
                        style="max-width:70px;" />Team-Madad</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                {!!isset($active)?'':$active='';!!}
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{($active=='home')?'active':''}}"><a href="{{route('home')}}" title="Home"
                                class="nav-link">Home</a></li>
                        <li class="nav-item {{($active=='donate')?'active':''}}"><a href="{{route('donate')}}" title="Donate"
                                class="nav-link">Donate</a></li>
                        <li class="nav-item {{($active=='gallary')?'active':''}}"><a href="{{route('gallery.index')}}" title="Gallery"
                                class="nav-link">Gallery</a></li>
                        <li class="nav-item {{($active=='blogs')?'active':''}}"><a href="{{route('blog.index')}}" title="Blogs"
                                class="nav-link">Blogs</a></li>
                        <li class="nav-item {{($active=='about')?'active':''}}"><a href="{{route('about')}}" title="About"
                                class="nav-link">About</a></li>
                        <li class="nav-item {{($active=='contactus')?'active':''}}"><a href="{{route('contactus')}}" title="ContactUs"
                                class="nav-link">ContactUs</a></li>
                        <li class="nav-item {{($active=='teamarea')?'active':''}}"><a href="{{route('teamarea')}}" title="TeamArea"
                                class="nav-link">TeamArea</a></li>
                        @auth
                            <li class="nav-item {{($active=='profile')?'active':''}}"><a href="{{auth()->user()->profile_url}}" title="Profile"
                            class="nav-link">{!!htmlspecialchars(explode(' ',Auth::user()->name)[0])!!}</a></li>
                            <li class="nav-item"><a href="{{route('logout')}}" title="Logout"
                                class="nav-link">{{__('Logout')}}</a></li>
                        @else
                            <li class="nav-item {{($active=='login')?'active':''}}"><a href="{{route('login')}}"
                            class="nav-link">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 col-lg-4">
                        <h3 class="heading-section">About Us</h3>
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                        <p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language ocean.</p>
                        <p><a href="{{route('about')}}" class="link-underline">Read More</a></p>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <h3 class="heading-section">Recent Blog</h3>
                        @foreach ($recent_blogs as $blog)
                            <div class="block-21 d-flex mb-4">
                                <figure class="mr-3">
                                    <img src="{{asset('images/bg_1.jpg')}}" alt="" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <h3 class="heading"><a href="{{$blog->url}}">{{Str::limit($blog->title,50)}}</a></h3>
                                    <div class="meta">
                                        <div><a style="cursor: pointer"><span class="icon-calendar"></span> {{$blog->created_date}}</a></div>
                                        <div><a href="{{$blog->user->profile_url}}"><span class="icon-person"></span> {{$blog->user->name}}</a></div>
                                        <div><a style="cursor: pointer"><span class="icon-chat"></span> {{$blog->comment_count}}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--
                        <div class="block-21 d-flex mb-4">
                            <figure class="mr-3">
                                <img src="images/img_2.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <h3 class="heading"><a href="#">Life Is Short So Be Kind</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 29, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="block-21 d-flex mb-4">
                            <figure class="mr-3">
                                <img src="images/img_4.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <h3 class="heading"><a href="#">Unfortunate Children Need Your Love</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 29, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Get Connected Block --}}
                    <div class="col-md-6 col-lg-4">
                        <div class="block-23">
                            <h3 class="heading-section">Get Connected</h3>
                            <ul>
                                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">
                                82,Indra Nagar , Lucknow , Uttra Pradesh, 226016.
                                </span></a></li>
                                <li><a href="tel:+917800887621"><span class="icon icon-phone"></span><span
                                            class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@teammadad.com</span></a></li>
                                <li><a href="https://www.instagram.com/teammadadlko/"><span class=" icon-2x icon-instagram"></span> <span
                                            class="text">TeamMadad</span></a></li>
                                <li><a href="https://www.facebook.com/TeamMadad-103595991333552"><span class=" icon-2x icon-facebook"></span> <span
                                            class="text">TeamMadad</span></a></li>
                                <li><a href="http://"><span class="icon-2x icon-twitter"></span><span
                                            class="text">@TeamMadad</span></a></li>



                                {{-- <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                    <li><a href="#"><span class="fab fa-insta"></span><span class="text">info@yourdomain.com</span></a></li>
                                    <li><a href="#"><img src="/images/insta.png" style="max-width: 30px;margin-right: 10px;"/><span class="text">info@yourdomain.com</span></a></li>
                                    <li><a href="#"><img src="/images/fb.png" style="max-width: 30px;margin-right: 10px;"/><span class="text">info@yourdomain.com</span></a></li>
                                    <li><a href="#"><img src="/images/tweeter.png" style="max-width: 30px;margin-right: 10px;"/><span class="text">info@yourdomain.com</span></a></li>
                                    <li><a href="#"><img src="/images/insta.png" style="max-width: 30px;margin-right: 10px;"/><span class="text">info@yourdomain.com</span></a></li> --}}
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="row pt-5">
                    <div class="col-md-12 text-center">

                        {{-- <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ion-ios-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p> --}}

                    </div>
                </div>
            </div>
        </footer>
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00" /></svg></div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>

        <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>

        <script src="{{asset('js/aos.js')}}"></script>
        <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
        </script> --}}
        <script src="{{asset('js/google-map.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>

</html>
