@extends('layouts.index_admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
	<table class="table">
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Active</td>
			<td><a href="{{ route('admin.category.create') }}" class="btn btn-md">Create</a></td>
		</tr>
		@foreach($categories as $itr)
		<tr>
			<td>{{ $itr->id }}</td>
			<td>{{ $itr->title }}</td>
			<td>@if($itr->active == 1) ok @else x @endif</td>
			<td>
				<a href="{{ route('admin.category.show', $itr->id) }}" class="btn btn-md">Show</a>
				<a href="{{ route('admin.category.edit', $itr->id) }}" class="btn btn-md">Edit</a>
				<form action="{{ route('admin.category.destroy', $itr->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
</div>
@endsection