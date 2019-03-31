
<!-- Navbar Started Hare -->

<nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

  <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{route('homepage')}}"><img src="{{asset('icon/icon.png')}}" style="height: 40px;"></a>

  <div class="collapse navbar-collapse" id="target">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a href="{{route('homepage')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
      </li>

      <li class="nav-item">
        <a href="{{route('about')}}" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">EXAM SCHEDULE</a>

        <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
          <a class="dropdown-item text-white" href="{{route('upcomingHome')}}">Upcoming Exam</a>
          <a class="dropdown-item text-white" href="{{route('ongoingHome')}}">Ongoing Exam</a>
          <a class="dropdown-item text-white" href="{{route('previousHome')}}">Previous Exam</a>

        </div>

      </li>

      <li class="nav-item">
        <a href="{{route('noticeHome')}}" class="nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">CONTACT US</a>

        <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
          <a href="{{route('viaEmail')}}" class="dropdown-item text-white"><i class="far fa-envelope"></i> Via Email</a>
          <a href="{{route('viaMessenger')}}" class="dropdown-item text-white"><i class="fab fa-facebook-messenger"></i> Via Messenger</a>
          <a href="{{route('viaPhone')}}" class="dropdown-item text-white"><i class="fas fa-phone-volume"></i> Via Phone Call</a>
        </div>

      </li>


      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown">REGISTER</a>

        <div class="dropdown-menu bg-info divide">
          <a href="{{route('teacher')}}" class="dropdown-item text-white">Teacher</a>
          <a href="{{route('student')}}" class="dropdown-item text-white">Student</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown">LOGIN</a>

        <div class="dropdown-menu bg-info divide">
          <a href="{{route('teacherLogin')}}" class="dropdown-item text-white">Teacher</a>
          <a href="{{route('studentLogin')}}" class="dropdown-item text-white">Student</a>
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
