@extends('layout')

@section('content')
	<h1>Edit Employee</h1>
	<form method="POST" action="{{ url('/users/' . $user->username) }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="well">
			<p>
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" value="{{$user['username']}}"/>
			</p>
			<p>
				<label for="firstName">First Name</label>
				<input type="text" class="form-control" name="firstName" value="{{$user['firstName']}}"/>
			</p>
			<p>
				<label for="lastName">Last Name</label>
				<input type="text" class="form-control" name="lastName" value="{{$user['lastName']}}"/>
			</p>
			<p>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-save"></span> Save
				</button>
			</p>
		</div>
	</form>
@endsection