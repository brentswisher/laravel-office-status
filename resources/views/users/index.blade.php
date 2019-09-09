@extends('layout')

@section('content')
	<h1>Users</h1>
	<p>
		<a class="btn btn-sm btn-success" href="{{ url('/users/create/') }}">
			<span class="glyphicon glyphicon-plus"></span>
			Add New Employee
		</a>
	</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Actions</th>
			</tr>
		</thead>
		<?php if(empty($users)){ ?>
			<tr>
				<td colspan="4">There are no employees found.</td>
			</tr>
		<?php } else { ?>
		<?php foreach ($users as $user): ?>
			<tr>
				<td><?=$user['lastName'] . ', ' . $user['firstName'] ?></td>
				<td><?=$user['username']?></td>
				<td>
					<a class="btn btn-sm btn-primary" href="users/{{ $user->username }}/edit">
						<span class="glyphicon glyphicon-pencil"></span> Edit
					</a>
					<form method="POST" action="users/{{ $user['username'] }}" style="display:inline;">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-sm btn-danger">
							<span class="glyphicon glyphicon-trash"></span> Delete
						</button>
					</form>
				</td>
			</tr>
		<?php endforeach;} ?>	
	</table>
@endsection