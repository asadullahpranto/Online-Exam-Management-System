
	@extends('teacher.master')
	@section('content')

<div class="container">
	<div class="row">

		<!--First Column -->

		<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
			<ul class="list-unstyled mt-5">
				<li>
					<a href="{{route('teacherdash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
				</li><hr style="border-color: white;">
				<li>
					<a href="{{route('studentno')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> STUDENTS</a>

				</li><hr style="border-color: white;">
				<li>
					<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS</a>

					<ul class="dropdown-menu bg-success">
						<li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
						<li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
						<li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Trash</a></li>
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
				<h4 class="text-info mb-3">Questions</h4>
				<hr>
			</div>

			<!-- Question Option -->

			<div class="container">
				<lebel for="question">1. What is the capital of bangladesh?</lebel>
				<div class="row my-2">
					<div class="col-5 ml-5">A. Dhaka</div>
					<div class="col-5">B. Rajshasi</div>
				</div>

				<div class="row mb-3 my-2">
					<div class="col-5 ml-5">C. Barisal</div>
					<div class="col-5">D. Jessore</div>
				</div>

				<lebel for="question">1. What is the capital of bangladesh?</lebel>
				<div class="row my-2">
					<div class="col-5 ml-5">A. Dhaka</div>
					<div class="col-5">B. Rajshasi</div>
				</div>

				<div class="row mb-3 my-2">
					<div class="col-5 ml-5">C. Barisal</div>
					<div class="col-5">D. Jessore</div>
				</div>
			</div>


		</div>


		<!-- Second Column Ends -->

	</div>
</div>

	@endsection
