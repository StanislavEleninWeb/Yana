@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('admin.comment.create') }}" method="POST">
					@csrf

					<div class="form-group">
						<label>Author</label>
						<input type="text" name="author" value="{{ old('author') }}" minlength="2" maxlength="191" required="">
					</div>

					<div class="form-group">
						<label>Comment</label>
						<textarea name="comment" required="">{{ old('comment') }}</textarea>
					</div>

					<div class="form-group">
						<label>Commentable ID</label>
						<input type="number" name="commentable_id" value="{{ old('commentable_id') }}" step="1" required="">
					</div>

					<div class="form-group">
						<label>Commentable type</label>
						<input type="text" name="commentable_type" value="{{ old('commentable_type') }}" required="">
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