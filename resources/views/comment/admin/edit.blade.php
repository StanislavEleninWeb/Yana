@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors.form')

				<form action="{{ route('admin.comment.edit', $comment->id) }}" method="POST">
					@csrf
					@method('PATCH')

					<div class="form-group">
						<label>Author</label>
						<input type="text" name="author" value="{{ $comment->author }}" class="form-control" required="" minlength="2" maxlength="191">
					</div>

					<div class="form-group">
						<label>Comment</label>
						<textarea name="comment" class="form-control" required="">{{ $comment->comment }}</textarea>
					</div>

					<div class="form-group">
						<label>Flag</label>

					</div>

					<div class="form-group">
						<button type="submit">Submit</button>
						<a href="{{ route('admin.comment.index') }}" class="btn btn-md btn-default">Back</a>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection