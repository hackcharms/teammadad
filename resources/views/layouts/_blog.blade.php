<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
    <div class="post-entry">
        @if ($blog->image)
        <a href="{{$blog->url}}" class="mb-3 img-wrap">
          <img src="/images/{{$blog->image}}" alt="Image placeholder" class="img-fluid">
        </a>
        @endif
      <h3><a href="{{$blog->url}}">{{Str::limit($blog->title,50)}}</a></h3>
      <div class="mb-4">
          <div class="col-sm-12">
              <span class="icon-2x mt-0 mr-1 icon-chat"></span><span>{{$blog->comment_count}}</span>
              <span class="icon-2x mt-0 mr-1 ml-2 icon-calendar"></span><span class="date text-muted">{{$blog->created_date}}</span>
                <span class="icon-2x  mr-1 icon-person"></span>
                <a href="{{$blog->user->profile_url}}" class="text-black-50"><span>
                    {{Str::limit($blog->user->name,20)}}</span> </a>
            </div>
        </div>
      <p>{{Str::limit($blog->body,100)}}</p>
      <p><a href="{{$blog->url}}" class="link-underline">Read More</a></p>
    </div>
  </div>
