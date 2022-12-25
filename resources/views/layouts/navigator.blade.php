
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="/images/teamLog.png" style="max-width:70px;"/>Team-Madad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{($active=='home')?'active':''}}"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          {{-- <li class="nav-item {{($active=='joinUs')?'active':''}}"><a href="how-it-works.html" class="nav-link">JoinUs</a></li> --}}
          <li class="nav-item {{($active=='donate')?'active':''}}"><a href="" class="nav-link">Donate</a></li>
          <li class="nav-item {{($active=='gallary')?'active':''}}"><a href="gallery.html" class="nav-link">Gallery</a></li>
          <li class="nav-item {{($active=='blog')?'active':''}}"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item {{($active=='about')?'active':''}}"><a href="{{route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item {{($active=='contact')?'active':''}}"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item {{($active=='teamarea')?'active':''}}"><a href="contact.html" class="nav-link">TeamArea</a></li>
        </ul>
      </div>
    </div>
  </nav>

