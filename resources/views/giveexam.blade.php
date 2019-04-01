<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.4.2/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('css/test.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/parsley.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrapjquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

	<title>Exam Management System</title>
	<link rel="icon" type="icon" href="{{asset('icon/icon.png')}}">

	<style>
		.dropdown-menu li:hover{
			background-color: tomato;
		}
		.btn-block:hover{
			background-color: tomato;
		}
	</style>
</head>

<body style="background-color: #202a3f;">

	<div class="container"><hr>

    <!-- Navbar Started Hare -->

    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

      <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="{{route('studentDash')}}"><img src="{{asset('icon/icon.png')}}" style="height: 40px;"></a>

      <div class="collapse navbar-collapse" id="target">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a href="{{route('studentDash')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
          </li>

          <li class="nav-item">
            <a href="{{route('aboutHome')}}" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">EXAM SCHEDULE</a>

            <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
              <a class="dropdown-item text-white" href="{{route('upcomingExam')}}">Upcoming Exam</a>
              <a class="dropdown-item text-white" href="{{route('ongoingExam')}}">Ongoing Exam</a>
              <a class="dropdown-item text-white" href="{{route('previousExam')}}">Previous Exam</a>

            </div>

          </li>

          <li class="nav-item">
            <a href="{{route('noticeBoard')}}" class="nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
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
            <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('students')->user()->name}}</span></a>

            <div class="dropdown-menu bg-info divide">
              <a href="#" class="dropdown-item text-white text-center">Settings</a>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" name="button" class="btn-info btn-block" style="border: none;">logout</button>
              </form>
              <!-- <form action="/logout" method="post"> <a href="" class="dropdown-item text-white">Logout</a></form> -->
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

  <div class="container">

    <div class="row">

      <div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
        <ul class="list-unstyled mt-5">
          <li>
            <a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
          </li><hr style="border-color: white;">
          <li>
            <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> EXAMS</a>
            <ul class="dropdown-menu bg-success">
              <li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
              <li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Result</a></li>
            </ul>

          </li><hr style="border-color: white;">
          <li>
            <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> HOME WORK</a>

            <ul class="dropdown-menu bg-success">
              <li class="dropdown-item"><a href="{{route('homeworklist')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework List</a></li>
              <li class="dropdown-item"><a href="{{route('homeworkresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework Result</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">
        <div class="mt-3">
          <p class="text-primary">Home / <span class="text-white">Exam</p>
          <hr>
        </div>

				<div class="">
					<h5><div class="text-center">COUNTDOWN:<span class="ml-2" style="color: #bf360c;" id="demo"></span> </div></h5>
				</div>

        <div class="">
          <form class="" action="/view_result/{{$e->id}}" method="post">
            @csrf

            <h4 class="text-uppercase text-center my-3 text-info">Exam Title: {{$e->examtitle}}</h4>
            <div class="row">
              <div class="col-md-4 col-lg-4">
                  <div class="text-center"><b>Exam Date: {{$e->examdate}}</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Total Time: {{$e->totaltime}} min</b></div>
              </div>
              <div class="col-md-4">
                  <div class="text-center"><b>Full Marks: {{$e->marks}}</b></div>
              </div>
            </div><hr>
            @php $i=1 @endphp
            @foreach($e->questions as $q)
            <div>
              <lebel for="question">{{$i}}. {{$q->question}}</lebel>

              <div class="row my-2">
                <div class="col-5 ml-5"><input type="radio" name="q{{$q->id}}" value="A"> A. {{$q->a}}</div>
                <div class="col-5"><input type="radio" name="q{{$q->id}}" value="B"> B. {{$q->b}}</div>
              </div>

              <div class="row mb-3 my-2">
                <div class="col-5 ml-5"><input type="radio" name="q{{$q->id}}" value="C"> C. {{$q->c}}</div>
                <div class="col-5"><input type="radio" name="q{{$q->id}}" value="D"> D. {{$q->d}}</div>
              </div>

            </div>
            @php $i++ @endphp
            @endforeach
            <div class="text-center">
							<button type="submit" class="btn btn-success btn-sx mr-2 mb-5 mt-3" style="width: 150px;">SUBMIT</button>
						</div>
          </form>

        </div>


        </div>
        <br><br><br>
      </div>

    </div>
  </div>
  </div>

  <div class="container my-4 ">
    <hr style="border-color: mediumseagreen;">
    <div class="footer">
      <ul class="nav nav-pills nav-fill bg-success rounded">
        <li class="nav-item">
          <a href="{{route('ds')}}" class="nav-link text-white btn-outline-info"><i class="fab fa-connectdevelop"></i> Developers</a>
        </li>
        <li class="nav-item">
          <a href="{{route('cs')}}" class="nav-link text-white btn-outline-info"><i class="far fa-copyright"></i> Copyright</a>
        </li>
        <li class="nav-item">
          <a href="{{route('pps')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-user-shield"></i>  Privacy Policy</a>
        </li>
        <li class="nav-item ">
          <a href="{{route('cos')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-file-signature"></i>  Contact</a>
        </li>
      </ul><hr>
    </div>
  </div>


  </body>
  <!-- Display the countdown timer in an element -->


<script>
// Set the date we're counting down to
var countDownDate = {{$e->ends}}*1000;
// console.log(countDownDate)

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "FINISHED";
  }
}, 1000);
</script>
  </html>
