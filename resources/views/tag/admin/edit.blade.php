@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors.form')
				<form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
					@csrf
					@method('PATCH')

					<div class="form-group">
						<label>Tag</label>
						<input type="text" name="tag" minlength="2" maxlength="191" value="{{ $tag->tag }}" required="">
					</div>

					<button type="submit">Submit</button>
					<a href="{{ route('admin.tag.index') }}" class="btn btn-sm">Back</a>
				</form>
			</div>
		</div>
	</div>
@endsection