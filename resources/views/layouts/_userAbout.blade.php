<div class="col-md-6 col-lg-3">
    <div class="block-38 text-center">
        <a href="{{$user->profile_url}}">
            <div class="block-38-img">
                <div class="block-38-header">
                    <img src="images/{{$user->profile_pic}}" alt="Image placeholder">
                    <h3 class="block-38-heading">{{$user->name}}</h3>
                    <p class="block-38-subheading">{{$user->post}}</p>
                </div>
                <div class="block-38-body">
                    <p>{{$user->desription??''}} </p>
                </div>
            </div>
        </a>
        </div>
    </div>
