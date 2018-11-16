<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">The Food Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::is('/') ? "nav-item active" : "nav-item" }}">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="{{ Request::is('blog') ? "nav-item active" : "nav-item" }}">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="{{ Request::is('about') ? "nav-item active" : "nav-item" }}">
        <a class="nav-link" href="/about">About</a>
      </li>
      
      <li class="{{ Request::is('contact') ? "nav-item active" : "nav-item" }}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      @guest
        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      @else
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
          <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
          <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <input type="submit" value="logout!!!">
        </form>
        </div>
      </li>
      <li><a class="nav-link">U are logged in</a></li>  
      @endguest
    
    
    </ul>
    </div>
</nav>