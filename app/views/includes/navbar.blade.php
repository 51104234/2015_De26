<header class="navbar navbar-static-top navbar-inverse" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <!-- <a href="{{ URL::route('get-main') }}" class="navbar-brand">Laravel</a> -->
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::route('get-main') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="{{ URL::route('get-blog') }}"><span class="glyphicon glyphicon-fire"></span> Blog</a></li>
                <li><a href="{{ URL::route('post.create') }}"><span class="glyphicon glyphicon-pencil"></span> New Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="{{ URL::route('get-profile') }}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }}</a></li>
                <li><a href="{{ URL::route('get-logout') }}"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
            @else
                <li><a href="{{ URL::route('get-signup') }}"><span class="glyphicon glyphicon-edit"></span> Sign up</a></li>
                <li><a href="{{ URL::route('get-signin') }}"><span class="glyphicon glyphicon-lock"></span> Sign in</a></li>
            @endif
            </ul>
        </nav>
    </div>

</header>

