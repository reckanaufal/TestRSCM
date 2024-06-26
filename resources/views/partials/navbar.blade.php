{{-- <div class="ww-nav-bar sticky-top bg-light">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a href="#">
        <svg class="heart" viewBox="0 0 32 29.6">
          <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/>
        </svg>
      </a>
      <h1 class="h2">
        <a class="pl-4 navbar-brand" href="/">
          Wedding Invitation <span class="h6 mt-1 ww-title">R&R</span>
        </a>
      </h1>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->
      <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link smooth-scroll" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/') }}/#couple">Couple</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/') }}/#events">Events</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/') }}/#people">People</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/') }}/#gallery">Gallery</a></li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ Session::get('name') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php $status = Session::get('status'); ?>
                @if ($status == 'Admin')
                <li><a class="dropdown-item" href="/admin">My Dashboard Admin</a></li>
                @else
                <li><a class="dropdown-item" href="/user">My Dashboard User</a></li>
                @endif
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="/register">Registrasi</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
</div> --}}
<div class="main-navigation">
    <!-- <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button> -->
    <ul class="menu">
      <li class="menu-item current-menu-item"><a href="/">Home</a></li>
      <li class="menu-item">
        <a href="/about">About</a>
      </li>
      <li class="menu-item">
        <a href="/regist">Registration</a>
      </li>
      <li class="menu-item">
        <a href="/login">Login</a>
      </li>
      @auth
        <?php $status = Session::get('status'); ?>
        @if ($status == 'Admin')
          <li class="menu-item">
            <a href="/admin">My Dashboard Admin</a>
          </li>
        @elseif ($status == 'pengguna')
          <li class="menu-item">
            <a href="/admin">My Dashboard Pengguna</a>
          </li>
        @else
          <li class="menu-item">
            <a href="/user">My Dashboard Staff</a>
          </li>
        @endif
        <form action="/logout" method="post">
          @csrf
          <li class="menu-item">
            <button type="submit">Logout</button>
          </li>
        </form>
      @endauth
      </li>
    </ul> <!-- .menu -->
</div> <!-- .main-navigation -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
  $('.menu-item').click(function() {
    $('.menu-item').removeClass('current-menu-item');
    $(this).addClass('current-menu-item');
  });
});
</script>