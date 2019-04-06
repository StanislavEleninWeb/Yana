@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors.form')

				<form action="{{ route('admin.image.store') }}" method="POST">
					@csrf

					<div class="form-group">
						<img src="/images/{{ intval($image->id/1000) }}/{{ $image->file_name }}.{{ $image->file_ext }}">
					</div>

					<div class="form-group">
						<label>Author</label>
						<input type="text" name="author" value="{{ $image->author }}" class="form-control" minlength="2" maxlength="191">
					</div>

					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" value="{{ $image->title }}" class="form-control" minlength="2" maxlength="191">
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