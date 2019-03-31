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
</head>

<body style="background-color: #202a3f;">

	<div class="container"><br>

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


        <!--Login End-->


	 <hr style="border-color: mediumseagreen;">

	 <!--Login Starts -->

	 <div class="row mb-3">

		 <!--First Half-->
				<div class="col-md-7 col-sm-8 col-lg-7 ">
					<div class="row">
					@foreach(\App\Relation\ExamDetail::latest()->take(4)->get() as $e)
					   <div class="col-sm-11 col-md-6 col-lg-6 mt-3">
						    <div class="card-deck">
									 <!--Upcoming Exam Cards-->
									 <div class="card " style="width: 15rem; background-color: #26a69a;">
							         <img class="card-img-top ml-5" src="{{asset('icon/icon.png')}}" style="height: 100px; width: 100px;" alt="Card image cap">
        							 <div class="card-body">
        								 <h6 class="card-title text-uppercase">Exam title: <span style="color: #e0f2f1;">{{$e->examtitle}}</span></h6>
                         <ul>
                           <li class="card-text">Exam date: {{$e->examdate}}</li>
                           <li class="card-text">Exam time: {{$e->examtime}}</li>
                           <li class="card-text">Total marks: {{$e->marks}}</li>
                         </ul>
        							 </div>
						       </div>
					      </div>
				    </div>
				 @endforeach
			 </div>



				 <!--Ongoing Exam Cards-->
						<!--	 <div class="card" style="width: 15rem; background-color: #80deea;">
						<!--	 <div class="card" style="width: 15rem; background-color: #80deea;">
						<!--	 <div class="card" style="width: 15rem; background-color: #80deea;">
					 <img class="card-img-top ml-5" src="{{asset('icon/icon.png')}}" style="height: 100px; width: 100px;" alt="Card image cap">
					 <div class="card-body">
						 <h5 class="card-title">Card title</h5>
						 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						 <a href="#" class="btn btn-primary">Go somewhere</a>
					 </div>
				 </div> -->

				 <!-- CARDS Ends -->


						</div>

						<!--Second Half-->
						<div class="col-md-5 col-sm-4 mb-3 col-lg-5">
								<form class="form-container" style="float: " method="post" action="/homepagelogin">

                  @if(session('f'))
                    <div class="alert alert-danger">
        							<p>Wrong Email or Password</p>
        						</div>
                  @endif
                  @csrf

										<h2 class="text-success text-uppercase text-center">
										 <img class="pb-2 pr-2" src="{{asset('icon/icon.png')}}" style="height: 40px;"> Login
										</h2>

								 <div class="form-group">
										 <label for="exampleInputEmail1" class="text-success">Email</label>
										 <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="height: 35px;">
								 </div>

								 <div class="form-group">
										 <label for="exampleInputPassword1" class="text-success">Password</label>
										 <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="height: 35px;">
								 </div>

                 <div class="mb-3">
         					<label for="teacher-student" class="text-success" style="height: 35px;">Student/Teacher</label>
         					<select id="gender" name="type" class="form-control">
         						<option selected value="s">Student</option>
         						<option value="t">Teacher</option>
         					</select>
         				</div>

								 <div class="checkbox">
										<label class="text-success">
											 <input type="checkbox"> Remember Me
										</label>
								 </div>

									<button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
						</div>

						<div class="col-md-0 col-sm-0 col-lg-0 "></div>
				</div>
      </div>

      <div class="container my-4 ">
        <hr style="border-color: mediumseagreen;">
        <div class="footer">
          <ul class="nav nav-pills nav-fill bg-success rounded">
            <li class="nav-item">
              <a href="{{route('developer')}}" class="nav-link text-white btn-outline-info"><i class="fab fa-connectdevelop"></i> Developers</a>
            </li>
            <li class="nav-item">
              <a href="{{route('copyright')}}" class="nav-link text-white btn-outline-info"><i class="far fa-copyright"></i> Copyright</a>
            </li>
            <li class="nav-item">
              <a href="{{route('privacy')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-user-shield"></i>  Privacy Policy</a>
            </li>
            <li class="nav-item ">
              <a href="{{route('contact')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-file-signature"></i>  Contact</a>
            </li>
          </ul><hr>
        </div>
      </div>


        </body>
        </html>


	<!--Footer-->
