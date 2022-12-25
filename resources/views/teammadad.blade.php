@extends('layouts.app',['title'=>'Team-Madad','active'=>'home'])
@section('content')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 block-30-sm item" style="background-image: url({{'images/bg_5.jpg'}});" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-12">
                        <h2 class="heading mb-5">Stand together Help Togethor.</h2>
                        {{-- <p style="display: inline-block;"><a href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox class="ftco-play-video d-flex"><span class="play-icon-wrap align-self-center mr-4"><span class="ion-ios-play"></span></span> <span class="align-self-center">Watch Video</span></a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pr-5">
                <div class="block-48">
                    <span class="block-48-text-1">Served Over</span>
                    <div class="block-48-counter ftco-number" data-number="123">0</div>
                    <span class="block-48-text-1 mb-4 d-block">Children in 150 Countries</span>
                    <p class="mb-0"><a href="#" class="btn btn-white px-3 py-2">View Our Program</a></p>
                </div>
            </div>
            <div class="col-md-6 welcome-text">
                <h2 class="display-4 mb-3">Who Are We?</h2>
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                <p class="mb-0"><a href="#" class="btn btn-primary px-3 py-2">Learn More</a></p>
            </div>
        </div>
    </div>
</div>
{{-- ====================================================================================== --}}
<div class="site-section border-top">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-bulb"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Our Mission</h3>
                        <p>There is no religion greater than humanity. Humanity is an independent charity working in conditions of poverty and exclusion, conflict and disaster. It is to  all mankind into one thread and inspire them to help each other . We help the vulnerable with their basic needs, improve their living conditions and their dignity. And promote respect for fundamental rights..</p>
                        <p><a href="{{route('about')}}" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-cash"></span></div>
                    <div class="media-body">
                        <h3 class="heading">Make Donations</h3>
                        <p>giving is not just about making a donation it's about making a difference.</p>
                        <p><a href="#" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="icon"><span class="ion-ios-contacts"></span></div>
                    <div class="media-body">
                        <h3 class="heading">We Need Volunteers</h3>
                        <p>Volunteering is the ultimate exercise in democracy. You vote in elections once a year, but when you volunteer, you vote every day about the kind of community you want to live in”.</p>
                        <p><a href="{{route('register')}}" class="link-underline">Register Now</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- .site-section -->
<div class="site-section fund-raisers bg-light">
    <div class="container">
        <div class="row mb-3 justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Latest Fundraisers</h2>
                <p class="lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p><a href="#" class="link-underline">View All Fundraisers</a></p>
            </div>
        </div>
    </div>
<div class="container-fluid">

    <!-- <div class="row"> -->

    <div class="col-md-12 block-11">
        <div class="nonloop-block-11 owl-carousel">

            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_1.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Water Is Life. Clean Water In Urban Area</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    {{-- <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> --}}
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>


            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_7.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Need Shelter for Children in Africa</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>

            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_3.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Children Needs Education</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>


            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_4.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Refugees Needs Food</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>


            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_6.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Voluteer </a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>

            <div class="card fundraise-item">
                <a href="#"><img class="card-img-top" src="images/img_3.jpg" alt="Image placeholder"></a>
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Children Needs Food</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                    <div class="progress custom-progress-success">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                </div>
            </div>

        </div>
    </div>
    <!-- </div> -->
</div>
</div>
@endsection
