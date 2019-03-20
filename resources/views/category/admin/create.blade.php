@extends('layouts.index_admin')

@section('title', 'Create Category')

@section('sub_links')
	<div class="top-left-down links">
        <a href="{{ route('admin.category.index') }}">List</a>
        <a href="{{ route('admin.category.create') }}">Create</a>
    </div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@include('layouts.errors.form')
				<form action="{{ route('admin.category.create') }}" method="POST">
					@csrf

					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title">
					</div>

					<div class="form-group">
						<label>Parent</label>
						<select name="parent_id">
							<option></option>
							@foreach($categories as $itr)
								<option value="{{ $itr->id }}">{{ $itr->title }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label>Sortorder</label>
						<input type="number" name="sortorder">
					</div>

					<div class="form-group">
						<label>Url</label>
						<input type="text" name="url">
					</div>

					<button type="submit" class="btn btn-md btn-success">Save</button>

				</form>
			</div>
		</div>
	</div>
@endsection