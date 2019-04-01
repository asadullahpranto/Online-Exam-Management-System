
<!-- Navbar Started Hare -->

<nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

  <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{route('teacherdash')}}"><img src="{{asset('icon/icon.png')}}" style="height: 40px;"></a>

  <div class="collapse navbar-collapse" id="target">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a href="{{route('teacherdash')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
      </li>

      <li class="nav-item">
        <a href="/examlistTeacher" class="nav-link btn-outline-info rounded text-white pr-3">EXAM LIST</a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">CONTACT US</a>

        <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
          <a href="#" class="dropdown-item text-white"><i class="far fa-envelope"></i> Via Email</a>
          <a href="#" class="dropdown-item text-white"><i class="fab fa-facebook-messenger"></i> Via Messenger</a>
          <a href="#" class="dropdown-item text-white"><i class="fas fa-phone-volume"></i> Via Phone Call</a>
        </div>

      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('teachers')->user()->name}}</span></a>

        <div class="dropdown-menu bg-info divide">
          <a href="{{route('homepage')}}" class="dropdown-item text-white text-center">Settings</a>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" name="button" class="btn-info btn-block" style="border: none;">Logout</button>
          </form>
        </div>
      </li>

      <!--LOGIN DISABLED
      <li class="nav-item">
        <a href="#" class="nav-link btn-outline-info rounded text-white pr-4">LOGIN</a>
      </li>

    -->

    </ul>

    <!-- Search Box -->

    <ul class="navbar-nav ml-auto">
      <form>
        <div class="input-group">
          <input class="form-control" type="text" name="search" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-info" style="width: 50px;" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </ul>

    <!--End-->
  </div>

</nav>

<!-- Navbar End Hare -->
<hr style="border-color: mediumseagreen;">
