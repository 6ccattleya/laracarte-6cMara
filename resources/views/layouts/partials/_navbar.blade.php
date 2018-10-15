<nav style="border-radius: 10%;background-color: #f5f5f5;" class="navbar navbar-expand-md navbar-light static-top">
  <a class="navbar-brand" href="{{route('app.home')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{set_active_route('app.home')}}" href="{{route('app.home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{set_active_route('app.about')}}">
        <a class="nav-link" href="{{route('app.about')}}">About</a>
      </li>
      <li class="nav-item {{set_active_route('app.home')}}">
        <a class="nav-link " href="#">Artisan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
          <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
          <a class="dropdown-item" href="https://larjobs.com">Larajobs</a>
          <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
          <a class="dropdown-item" href="https://larachat.com">Larachat</a>
        </div>
      </li>
      <li class="nav-item {{set_active_route('app.home')}}">
        <a class="nav-link " href="{{route('app.contacts')}}">Contacts</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
  </div>
</nav>
