@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors.form')

				<form action="{{ route('admin.'. $controller .'.store') }}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" value="{{ old('title') }}" class="form-control" minlength="2" maxlength="191">
					</div>

					<div class="form-group">
						<label for="author">Author</label>
						<input type="text" name="author" value="{{ old('author') }}" class="form-control" minlength="2" maxlength="191">
					</div>

					<div class="form-group">
						<label for="text">Text</label>
						<textarea name="text" class="form-control">{{ old('text') }}</textarea>
					</div>

					<div class="form-group">
						<button type="submit">Submit</button>
						<a href="{{ route('admin.image.index') }}" class="btn btn-md">Back</a>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection