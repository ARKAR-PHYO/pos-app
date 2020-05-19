<header class="c-header c-header-light px-3 c-subheader">
  <a class="c-header-brand" href="#">
    <span class="c-header-toggler-icon"></span>
    <img src="{{ asset('img/dashboard/profile.png') }}" width="40" height="40" class="d-inline-block align-top" alt="WebX Logo">
    WebX
  </a>
  <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
    <span class="c-header-toggler-icon"></span>
  </button>
  <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" response="true">
    <span class="c-header-toggler-icon"></span>
  </button>
  <ul class="c-header-nav mr-auto">
    <li class="c-header-nav-item active">
      <a class="c-header-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="c-header-nav-item">
      <a class="c-header-nav-link" href="#">Link</a>
    </li>
    {{-- <li class="c-header-nav-item dropdown">
      <a class="c-header-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
        Dropdown
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="c-header-nav-item">
      <a class="c-header-nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li> --}}
  </ul>
  
  <!-- AUTHENTATION -->
  <ul class="c-header-nav">
    @if (Route::has('login'))
    @auth
    <li class="c-header-nav-item">
      <a href="{{ url('/home') }}" class="c-header-nav-link">Home</a>
    </li>
    @else
    <li class="c-header-nav-item">
      <a href="{{ route('login') }}" class="c-header-nav-link">Login</a>
    </li>
    @if (Route::has('register'))
    <li class="c-header-nav-item">
      <a href="{{ route('register') }}" class="c-header-nav-link">Register</a>
    </li>
    @endif
    @endauth
    @endif

    {{-- <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
  </ul> --}}

  </ul>
  
</header>
