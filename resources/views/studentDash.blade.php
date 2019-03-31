
	@extends('student.master')

	@section('content')


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
						<p class="text-primary">Home / <span class="text-white">Dashboard</p>
						<hr>
					</div>

					<div>
						<h3 class="text-info">Dashboard</h3>
					</div><hr>

					<div>
						<h4>Welcome to online Examination Portal</h4>
					</div><hr>

					<div class="card-deck card-center">
						<div class="card text-white my-4 mx-5" style="max-width: 18rem; background-color: #4caf50;">
							<div class="card-header text-right">EXAM</div>

							<div class="card-body bg-info">
								<ul class="list-group list-group-flush">
								    <li class="list-group-item bg-info"><a href="{{route('examlist')}}" class="text-white text-uppercase">exam List</a></li>
								    <li class="list-group-item bg-info"><a href="{{route('examresult')}}" class="text-white text-uppercase">exam Result</a></li>
								</ul>

							</div>
						</div>

						<div class="card text-white mx-5 my-4" style="max-width: 18rem; background-color: #e57373;">
							<div class="card-header text-right">HOME WORK</div>

							<div class="card-body bg-info">
								<ul class="list-group list-group-flush">
								    <li class="list-group-item bg-info"><a href="{{route('homeworklist')}}" class="text-white text-uppercase">Homework List</a></li>
								    <li class="list-group-item bg-info"><a href="{{route('homeworkresult')}}" class="text-white text-uppercase">Homework Result</a></li>
								</ul>

							</div>
						</div>

					</div>
					<br><br><br>
				</div>

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
