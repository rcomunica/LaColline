<nav class="navbar navbar-expand-lg bg-yellow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('assets/img/sclog.png')}}" alt="Logo" width="50"  class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i> Social Media</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    <div class="btn-group me-3">
      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-language"></i>
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Español</a></li>
        <li><a class="dropdown-item" href="#">English</a></li>
        <li><a class="dropdown-item" href="#">عربي</a></li>
        <li><a class="dropdown-item" href="#">Français</a></li>
      </ul>
    </div>
      <a href="{{route('login')}}"><button type="button" class="btn btn-outline-success me-3" >Login</button></a>
      <a href="{{route('register')}}"><button type="button" class="btn btn-outline-primary">Register</button></a>
    </div>
  </div>
</nav>