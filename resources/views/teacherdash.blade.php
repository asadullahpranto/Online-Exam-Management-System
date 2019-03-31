
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
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
								<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
								<li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Trash</a></li>
							</ul>
						</li><hr style="border-color: white;">

						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
								<li class="dropdown-item"><a href="{{route('export')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<!-- First Column End -->


				<!-- Second Column Starts -->

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Dashboard</h6>
						<hr>
					</div>

					<div>
						<h5 class="text-info">Dashboard</h5>
					</div><hr>


					<div class="card-deck">
						<div class="card text-white mb-2 mx-5" style="max-width: 18rem; background-color: #e57373;">
							<div class="card-header text-right">STUDENT INFORMATION</div>

							<div class="card-body bg-info">
								<ul class="list-group list-group-flush">
								    <li class="list-group-item bg-info"><a href="{{route('studentno')}}" class="text-white text-uppercase">Student List</a></li>
								    <li class="list-group-item bg-info"><a href="/examlistforrank" class="text-white text-uppercase">Student Rank</a></li>
								</ul>

							</div>
						</div>

						<div class="card text-white mb-2 mx-5" style="max-width: 18rem; background-color: #4caf50;">
							<div class="card-header text-right">EXAM</div>

							<div class="card-body bg-info">
								<ul class="list-group list-group-flush">
								    <li class="list-group-item bg-info"><a href="{{route('examlistTeacher')}}" class="text-white text-uppercase">Exam List</a></li>
								    <li class="list-group-item bg-info"><a href="{{route('examname')}}" class="text-white text-uppercase">CREATE EXAM</a></li>
								</ul>

							</div>
						</div>

					</div>

					<div class="card-deck card-center mb">

						<div class="card text-white mt-2 mb-4 mx-5" style="max-width: 18rem; background-color: #e57373;">
							<div class="card-header text-right">EXPORT | IMPORT</div>

							<div class="card-body bg-info">
								<ul class="list-group list-group-flush">
								    <li class="list-group-item bg-info"><a href="{{route('import')}}" class="text-white text-uppercase">Import Question</a></li>
								    <li class="list-group-item bg-info"><a href="{{route('export')}}" class="text-white text-uppercase">Export Question</a></li>
								</ul>

							</div>
						</div>

					</div>
				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
