
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
						<h6 class="text-primary">Home / <span class="text-white">Import</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Emport Questions</h3>
						<hr>
					</div>

					<!--Table -->
          <form class="" action="{{route('import')}}" method="post">
            <div class="form-group mt-5">
      				<label for="file" class="text-success">Your PDF File:</label>
      				<input type="file" id="file" class="form-control" style="height: 42px;">
      				<small id="fileHelp" class="form-text text-danger">File format must be in pdf(.pdf)</small>
      			</div><hr>
            <div class="clearfix">

            </div>
						<div class="text-center">
							<button type="submit" class="btn btn-success btn-sx mr-2 mb-5 mt-3" style="width: 150px;">INSERT</button>
						</div>
          </form>
					<br><br><br><br><br><br><br><br><br>

				</div>


				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
		@endsection
