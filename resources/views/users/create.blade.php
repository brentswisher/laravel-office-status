@extends('layout')

@section('content')
	<h1>Create Employee</h1>
	<form method="POST" action="{{ url('/users/') }}">
		{{ csrf_field() }}
		<div class="well">
			<p>
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" />
			</p>
			<p>
				<label for="firstName">First Name</label>
				<input type="text" class="form-control" name="firstName" />
			</p>
			<p>
				<label for="lastName">Last Name</label>
				<input type="text" class="form-control" name="lastName" />
			</p>
			<p>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-save"></span> Save
				</button>
			</p>
		</div>
	</form>
@endsection