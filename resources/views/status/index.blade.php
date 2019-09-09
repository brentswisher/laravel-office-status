@extends('layout')

@section('content')
	<h1>Status</h1>
	<p>
		<a class="btn btn-sm btn-success" href="{{ url('/status/create/') }}">
			<span class="glyphicon glyphicon-plus"></span>
			Add New Status
		</a>
	</p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Status</th>
				<th>Actions</th>
			</tr>
		</thead>
		@if(empty($statuses))
			<tr>
				<td colspan="4">There are currently no statuses.</td>
			</tr>
		@else
			@foreach ($statuses as $status_item)
				<tr>
					<td>{{ $status_item['title'] }}</td>
					<td>
						<a class="btn btn-sm btn-primary" href="status/{{ $status_item['publicId'] }}/edit">
							<span class="glyphicon glyphicon-pencil"></span> Edit
						</a>
						<form method="POST" action="status/{{ $status_item['publicId'] }}" style="display:inline;">
							@method('DELETE')
							@csrf
							<button type="submit" class="btn btn-sm btn-danger">
								<span class="glyphicon glyphicon-trash"></span> Delete
							</button>
						</form>
					</td>
				</tr>
			@endforeach
		@endif
	</table>
@endsection