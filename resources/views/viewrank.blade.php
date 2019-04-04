@extends('student.master')
@section('content')


		<!-- Navbar End Hare -->
		<hr style="border-color: mediumseagreen;">
		<div class="container">
			<div class="row">
				<div class="col-3 rounded-left bg-info">
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

				<div class="col-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Exam Rank</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info">Exam Result</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Reg. No</th>
								<th>Dept.</th>
								<th>Score</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($rs as $r)
	            <tr>
	              <td>{{$i}}</td>
	              <td>{{$r->student->name}}</td>
	              <td>{{$r->student->registration}}</td>
								<td>{{$r->student->department}}</td>
								<td>{{$r->score}}</td>
	            </tr>
							@php $i++ @endphp
	            @endforeach
						</tbody>
					</table><hr><br><br><br>

				</div>

			</div>
		</div>

	</div>

	<!--Footer-->
@endsection
