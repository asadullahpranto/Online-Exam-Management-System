
		@extends('partials.master')


		@section('content')


		<!-- Navbar End Hare -->
		<hr style="border-color: mediumseagreen;">

		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
						<li>
							<i class="fas fa-home text-white"></i>
							<i class="fas fa-home text-white"></i>
							<i class="fas fa-home text-white"></i>
							<i class="fas fa-home text-white"></i>
							<i class="fas fa-home text-white"></i>
							<i class="fas fa-home text-white"></i>
						</li><hr style="border-color: white;">
						<li>
							<a href="#" class="text-white" style="text-decoration: none;">PREVIOUS EXAM</a>
						</li><hr style="border-color: white;">

					</ul>
				</div>

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Previous Exam List</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Previous Exam Lists</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Date</th>
								<th>Exam Time</th>
								<th>Marks</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
              @foreach($es as $e)
							<tr>
								<td scope="row">{{$i}}</td>
								<td>{{$e->examtitle}}</td>
								<td>{{$e->examdate}}</td>
								<td>{{$e->examtime}}</td>
								<td>{{$e->marks}}</td>
                @php $i++ @endphp
							</tr>
              @endforeach
						</tbody>
					</table><hr><br><br>

				</div>

			</div>
		</div>

	</div>
@endsection
