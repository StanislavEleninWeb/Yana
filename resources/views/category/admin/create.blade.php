@extends('layouts.index_admin')

@section('content')
	<form action="{{ route('admin.category.store') }}" method="POST">
		@csrf

		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" value="{{ old('title') }}">
		</div>

		<div class="form-group">
			<label>Parent category</label>
			<select>
				<option value="NULL"></option>
				@foreach($categories as $itr)
					<option value="{{ $itr->id }}">{{ $itr->title }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Sortorder</label>
			<input type="number" name="sortorder" value="{{ old('sortorder') }}" step="1">
		</div>

		<div class="form-group">
			<label>Url</label>
			<input type="text" name="url" value="{{ old('url') }}">
		</div>

		<div class="form-group">
			<label>Active</label>
			<input type="checkbox" name="active">
		</div>

		<button type="submit">Submit</button>

	</form>
@endsection