<!-- Menyimpan menu menu navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="img/lg.PNG" width="50" height="50" alt="Logo ZAP">
        ZAP LAUNDRY
      </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === "Service")? 'active' : '' }}" href="/service">Service</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === "Contact Us") ? 'active' : '' }}" href="/contactus">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Order")? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Order
          </a> --}}
          {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Category</a></li>
            <li><a class="dropdown-item" href="#">Item</a></li>
            <!--<div class="dropdown-divider"></div>-->
            <li><a class="dropdown-item" href="#">Status</a></li>
          </ul> --}}
        </li>
      </ul>
    </div>
    <ul class="navbae-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hello {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard">My Dasboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item" href="#">Logout</button>
            </form>
            </li>
        </ul>
      </li>
      @else
      {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          LOGIN
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/loginp">Pelanggan</a></li>
          <li><a class="dropdown-item" href="/login">Pegawai</a></li>
          <li><hr class="dropdown-divider"></li>
          {{-- <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item" href="/login">Pegawai</button>
            </form>
            </li> --}}
        </ul>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <a href="/login" class="btn btn-outline-success">Login</a>
        <a href="/registrasi_awal" class="btn btn-outline-danger">Register</a>
      </form>
      @endauth  
    </ul>  
</div>
</nav>