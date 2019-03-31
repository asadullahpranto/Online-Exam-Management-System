

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


					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Reg. No</th>
								<th>Score</th>
								<th>Percentage</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($rs as $r)
	            <tr>
	              <td>{{$i}}</td>
	              <td>{{$r->student->name}}</td>
	              <td>{{$r->student->registration}}</td>
	              <td>{{$r->score}}</td>
								@if($r->marks)
								<td>{{(($r->score)*100)/($r->marks)}}%</td>
								@endif
								@if(!$r->marks)

								<td>{{$r->score}}%</td>
								@endif
	            </tr>
							@php $i++ @endphp
	            @endforeach
						</tbody>
					</table><hr><br><br><br>


				</div>

				<!-- Second Column Ends -->

			</div>
		</div>

	</div>

	<!--Footer-->
	@endsection
