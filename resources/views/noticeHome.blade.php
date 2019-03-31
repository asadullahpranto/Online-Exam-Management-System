
@extends('partials.master')

		<!-- Navbar End Hare -->
@section('content')

<hr style="border-color: mediumseagreen;">

		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
            <li>
              <i class="fas fa-flag-checkered text-white text-center"></i>
              <i class="fas fa-flag-checkered text-white text-center"></i>
              <i class="fas fa-flag-checkered text-white text-center"></i>
              <i class="fas fa-flag-checkered text-white text-center"></i>
              <i class="fas fa-flag-checkered text-white text-center"></i>
              <i class="fas fa-flag-checkered text-white text-center"></i>
            </li>
						<li><hr style="border-color: white;">
							<a href="#" class="text-white ml-2" style="text-decoration: none;">NOTICE BOARD</a>
						</li><hr style="border-color: white;">
					</ul>
				</div>

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Notice Board</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info mb-3">Notice Board</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Date</th>
								<th>Attend Exam</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>Attend</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>CSE-502</td>
								<td>3-05-19</td>
								<td>Attend</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>CSE-501</td>
								<td>2-03-19</td>
								<td>Attend</td>
							</tr>
						</tbody>
					</table><hr><br><br><br><br><br><br><br>

				</div>

			</div>
		</div>

	</div>

	<!--Footer-->
@endsection
