@extends('layouts.index_admin')

@section('title', 'Show Category')

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
				<form action="{{ route('admin.category.create') }}" method="POST">
					@csrf

					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" disabled="">
					</div>

					<div class="form-group">
						<label>Parent</label>
						<select name="parent_id" class="form-control" disabled="">
							<option></option>
							@foreach($categories as $itr)
								<option value="{{ $itr->id }}" @if($itr->id == $category->parent_id) selected="" @endif>{{ $itr->title }}</option>
							@endforeach
						</select>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection