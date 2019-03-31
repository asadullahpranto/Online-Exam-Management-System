

		<!-- Navbar Started Hare -->

    @extends('partials.master')

		<!-- Navbar End Hare -->



        <!--Login End-->

   @section('content')

	 <hr style="border-color: mediumseagreen;">

	 <!--Login Starts -->
   <h1>How are You</h1>

	 <div class="row my-4">

		 <!--First Half-->
				<div class="col-md-7 col-sm-8 col-lg-7 ">
					<div class="row">
					@foreach($card as $card)
							<div class="col-sm-11 col-md-6 col-lg-6 mt-3">
								 <div class="card-deck">
									 <!--Upcoming Exam Cards-->

									 <div class="card " style="width: 15rem; background-color: #fbc02d;">
							 <img class="card-img-top ml-5" src="{{asset('icon/icon.png')}}" style="height: 100px; width: 100px;" alt="Card image cap">
							 <div class="card-body">
								 <h5 class="card-title">{{$card->title}}</h5>
								 <p class="card-text">{{$card->description}}</p>
								 <a href="#" class="btn btn-primary">Go somewhere</a>
							 </div>

						 </div>
					 </div>
				 </div>
				 @endforeach
			 </div>



				 <!--Ongoing Exam Cards-->
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
								<form class="form-container" style="float: ">


										<h2 class="text-success text-uppercase text-center">
										 <img class="pb-2 pr-2" src="{{asset('icon/icon.png')}}" style="height: 40px;"> Login
										</h2>

								 <div class="form-group">
										 <label for="exampleInputEmail1" class="text-success">Email</label>
										 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="height: 35px;">
								 </div>

								 <div class="form-group">
										 <label for="exampleInputPassword1" class="text-success">Password</label>
										 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="height: 35px;">
								 </div>

                 <div class="mb-3">
         					<label for="teacher-student" class="text-success" style="height: 35px;">Student/Teacher</label>
         					<select id="gender" class="form-control">
         						<option selected>Student</option>
         						<option>Teacher</option>
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

	 @endsection

	<!--Footer-->
