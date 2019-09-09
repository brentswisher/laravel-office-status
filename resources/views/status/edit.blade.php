@extends('layout')

@section('content')
	<h1>Edit Status</h1>
	<form method="POST" action="{{ url('/status/' . $status->publicId) }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="well">
		    <p>
		    	<label for="title">Title</label>
		    	<input type="text" class="form-control" name="title" value="{{ $status->title }}"/>
		    </p>
			<p>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-save"></span> Save
				</button>
			</p>
		</div>
	</form>
@endsection