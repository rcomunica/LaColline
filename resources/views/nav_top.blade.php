<nav class="navbar navbar-expand-lg fixed-top text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{asset('assets/img/sclog.png')}}" alt="Logo" width="50"  class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active nav-text" aria-current="page" href="{{route('home')}}">{{__('Home')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-text" href="#footer">{{__('Contact')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-text" href="{{ route('shop')}}">{{__('Store')}}</a>
        </li>
      </ul>
    <div class="btn-group me-3">
      <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-language"></i>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ url('locale/es')}}">Español</a></li>
        <li><a class="dropdown-item" href="{{ url('locale/en')}}">English</a></li>
        <li><a class="dropdown-item" href="{{ url('locale/ar')}}">عربي</a></li>
        <li><a class="dropdown-item" href="{{ url('locale/fr')}}">Français</a></li>
      </ul>
    </div>
    @auth
      <a href="{{route('dashboard')}}"><button type="button" class="btn btn-outline-primary me-3" >Panel</button></a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
             <button type="button" class="btn btn-outline-light">Log out</button>
      </a>
    </form>
      @else
      <a href="{{route('login')}}"><button type="button" class="btn btn-outline-dark me-3" >{{__('Login')}}</button></a>
      <a href="{{route('register')}}"><button type="button" class="btn btn-outline-dark">{{__('messages.Register')}}</button></a>
    @endauth

      
    </div>
  </div>
</nav>