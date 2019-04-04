
	@extends('teacher.master')


	@section('content')


		<!-- Navbar End Hare -->

		<div class="container">
			<div class="row">

				<!--First Column -->

				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
						<li>
							<a href="{{route('teacherdash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS INFO</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
								<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
								<li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Trash</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-user"></i> STUDENT INFO</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Student List</a></li>
								<li class="dropdown-item"><a href="/examlistforrank" class="dropdown-link text-white" style="text-decoration: none;">Student Rank</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

							<ul class="dropdown-menu bg-success">
			          <li class="dropdown-item"><a href="/exportquestion" class="dropdown-link text-white" style="text-decoration: none;">Export Question</a></li>
			          <li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
			          <li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
			        </ul>
						</li>
					</ul>
				</div>

				<!-- First Column End -->


				<!-- Second Column Starts -->

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Create Exam</h6>
						<hr>
					</div>

					<div class="my-3">
						<h5 class="text-info mb-3">Add Questions</h5>
						<hr>
					</div>

					<!-- Question Option -->

					<div class="container">
						<form action="{{route('create-exam')}}" method="post">

							@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if (\Session::get('success'))
										<div class="alert alert-success">
											<p>{{ \Session::get('success') }}</p>
										</div>
									@endif

							@csrf

							<div>
								<label for="question" class="text-success">Question *:</label>
								<input type="text" name="question" placeholder="Your Qusetion" class="form-control form-control-sm" required>
							</div><br>

							<label for="answer" class="text-success">Give Options:</label>

							<div class="form-row">
								<div class="col">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">A</span>
										</div>
										<input type="text" name="option_a" class="form-control">
									</div>
								</div>

								<div class="col">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">B</span>
										</div>
										<input type="text" name="option_b" class="form-control">
									</div>
								</div>
							</div><br>

							<div class="form-row">
								<div class="col">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">C</span>
										</div>
										<input type="text" name="option_c" class="form-control">
									</div>
								</div>

								<div class="col">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">D</span>
										</div>
										<input type="text" name="option_d" class="form-control">
									</div>
								</div>
							</div><br>

							<div class="mb-4">
								<label for="answer" class="text-success">Select Your Answer:</label>
								<select name="answer" class="form-control form-control-sm">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
								</select>
							</div>

							<div>
								<a href="{{route('questions')}}"><input value="FINISH" class="btn btn-success ml-2 mb-5" style="float: left; width: 200px;"></a>

								<input type="submit" name="submit" value="INSERT" class="btn btn-success mr-2 mb-5" style="float: right; width: 200px;">
							</div>

							<!--
								<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					<input type="radio">
				</span>
			</div>
			<div class="input-group-prepend">
				<span class="input-group-text">$5.00</span>
			</div>
			<input type="text" class="form-control">
		</div><hr>
							-->

						</form>
					</div>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
