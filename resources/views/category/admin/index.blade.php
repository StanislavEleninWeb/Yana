@extends('layouts.index_admin')

@section('content')
	<a href="{{ route('admin.category.create') }}" class="btn btn-md">Create</a>

	<hr>

	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Active</td>
			<td></td>
		</tr>
		@foreach($categories as $itr)
		<tr>
			<td>{{ $itr->id }}</td>
			<td>{{ $itr->title }}</td>
			<td>@if($itr->active == 1) ok @else x @endif</td>
			<td>
				<a href="{{ route('admin.category.show', $itr->id) }}">Show</a>
				<a href="{{ route('admin.category.edit', $itr->id) }}">Edit</a>
				<form action="{{ route('admin.category.destroy', $itr->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
@endsection