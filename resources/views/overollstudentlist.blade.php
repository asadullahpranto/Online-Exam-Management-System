
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
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> STUDENTS</a>
							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('coursewisestudentlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Coursewise List</a></li>
								<li class="dropdown-item"><a href="{{route('overollstudentlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Overall List</a></li>
								<li class="dropdown-item"><a href="{{route('rankcoursewise')}}" class="dropdown-link text-white" style="text-decoration: none;">Coursewise Rank</a></li>
								<li class="dropdown-item"><a href="{{route('rankoverall')}}" class="dropdown-link text-white" style="text-decoration: none;">Overall Rank</a></li>
							</ul>
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
						<h6 class="text-primary">Home / <span class="text-white">Student List</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Overall Student List</h3>
						<hr>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Date</th>
								<th>Time</th>
								<th>Marks</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>40m</td>
								<td>50</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>CSE-502</td>
								<td>3-05-19</td>
								<td>40m</td>
								<td>70</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>30m</td>
								<td>30</td>
							</tr>
						</tbody>
					</table><hr><br><br><br><br><br><br><br>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
		@endsection
