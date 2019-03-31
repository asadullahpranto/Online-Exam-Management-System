@extends('partials.master')

@section('content')

		<hr style="border-color: mediumseagreen;">

		<h2 class="text-center text-uppercase text-success mt-3">Student Registration</h2>

		<form action="{{route('studentInformation')}}" method="post">



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
			<label for="name" class="text-success">Name:</label>
			<div>
				<div>
					<input  name="name" type="text" placeholder="Full Name" class="form-control form-control-sm" required>
				</div>
			</div><br>

			<div class="form-row">
				<div class="col">
					<label for="email" class="text-success">Email Address:</label>
					<input type="email" name="email" placeholder="Enter your email" class="form-control form-control-sm" required>
					<small class="form-text text-danger">Your email will not be shared with anyone</small>
				</div>
				<div class="col">
					<label for="email" class="text-success">Confirm Email Address:</label>
					<input type="email" name="confirm-email" placeholder="Confirm your email" class="form-control form-control-sm">
				</div>
			</div><br>

			<div class="form-row">
				<div class="col">
					<label for="password" class="text-success">Password:</label>
					<input type="password" name="password" placeholder="Choose a password" class="form-control form-control-sm" minlength="5" required>

				</div>
				<div class="col">
					<label for="password" class="text-success">Confirm Password:</label>
					<input type="password" name="confirm-password" placeholder="Confirm your password" class="form-control form-control-sm">
				</div>
			</div><br>

			<label for="institution" class="text-success">Institution Name:</label>
			<div class="form-group">
				<input type="text" name="institution" placeholder="Institution Name" class="form-control form-control-sm" required>
			</div>


			<div class="form-row">
				<div class="col">
					<label for="department" class="text-success">Department:</label>
					<input type="text" name="department" placeholder="Department Name" class="form-control form-control-sm" required>
				</div>
				<div class="col">
					<label for="registration" class="text-success">Registration Number:</label>
					<input type="number" name="registration" placeholder="Registration Number" class="form-control form-control-sm" required>
				</div>
			</div><br>

			<div class="form-row">
				<div class="col">
					<label for="year"  class="text-success">Year:</label>
					<select id="year" type="text" name="year" class="form-control form-control-sm">
						<option>1st</option>
						<option>2nd</option>
						<option>3rd</option>
						<option>4th</option>
					</select>
				</div>

				<div class="col">
					<label for="semester"  class="text-success">Semester:</label>
					<select id="semester" name="semester" type="text" class="form-control form-control-sm">
						<option>1st</option>
						<option>2nd</option>
					</select>
				</div>
			</div><br>

			<div class="form-row">
				<div class="col">
					<label for="contact" class="text-success">Contact Number:</label>
					<input type="text" name="contact" placeholder="Contact Number" class="form-control form-control-sm" required><small class="text-danger">must be valid*</small>
				</div>

				<div class="col">
					<label for="gender" class="text-success">Gender:</label>
					<select id="gender" name="gender"  type="text" class="form-control form-control-sm">
						<option selected>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
			</div><br>

			<div class="form-group">
				<label for="file" class="text-success">Your Image:</label>
				<input type="file" id="file" name="image" class="form-control form-control-sm" style="height: 37px;">
				<small id="fileHelp" class="form-text text-danger">Size less than equal 3mp</small>
			</div>

			<button type="submit"  class="btn btn-success  mr-2 mb-3" style="float: right; width: 200px;">Register</button>

		</form><hr>
    <div class=" clearfix"></div>

	@endsection
