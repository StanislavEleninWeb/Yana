@extends('layouts.index_admin')

@section('content')

	@include('layouts.errors.form')

	<form action="{{ route('admin.category.update', $category->id) }}" method="POST">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" value="{{ $category->title }}">
		</div>

		<div class="form-group">
			<label>Parent category</label>
			<select name="parent_id">
				<option></option>
				@foreach($categories as $itr)
					<option value="{{ $itr->id }}" @if ($category->parent_id == $itr->id) selected @endif>{{ $itr->title }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Sortorder</label>
			<input type="number" name="sortorder" value="{{ $category->sortorder }}" step="1">
		</div>

		<div class="form-group">
			<label>Url</label>
			<input type="text" name="url" value="{{ old('url') }}">
		</div>

		<div class="form-group">
			<label>Active</label>
			<input type="checkbox" name="active" value="1" @if ($category->active == 1) checked @endif>
		</div>

		<div class="form-group">
			<button type="submit">Submit</button>
			<a href="{{ route('admin.category.index') }}">Back</a>
		</div>

	</form>
	
@endsection