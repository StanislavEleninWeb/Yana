@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@include('layouts.errors.form')
				<form action="{{ route('admin.tag.store') }}" method="POST">
					@csrf

					<div class="form-group">
						<label>Tag</label>
						<input type="text" name="tag" minlength="2" maxlength="191" value="{{ old('tag') }}" required="">
					</div>

					<button type="submit">Submit</button>
					<a href="{{ route('admin.tag.index') }}" class="btn btn-sm">Back</a>
				</form>
			</div>
		</div>
	</div>
@endsection