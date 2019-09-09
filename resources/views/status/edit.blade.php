@extends('layout')

@section('content')
	<h1>Edit Status</h1>
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form method="POST" action="{{ url('/status/' . $status->publicId) }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="well">
		    <p>
		    	<label for="title">Title</label>
		    	<input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $status->title }}"/>
		    </p>
			<p>
				<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-save"></span> Save
				</button>
			</p>
		</div>
	</form>
@endsection