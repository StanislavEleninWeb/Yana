@extends('layouts.index_admin')

@section('content')
	<table class="table">
		<tr>
			<td>ID</td>
			<td>Commentable id</td>
			<td>Commentable type</td>
			<td>Author</td>
			<td>Created at</td>
			<td>
				<a href="{{ route('admin.comment.create') }}" class="btn btn-md btn-default">Create</a>
			</td>
		</tr>

		@foreach($comments as $itr)
			<tr>
				<td>{{ $itr->id }}</td>
				<td>{{ $itr->commentable_id }}</td>
				<td>{{ $itr->commentable_type }}</td>
				<td>{{ $itr->author }}</td>
				<td>{{ $itr->created_at }}</td>
				<td>
					<a href="{{ route('admin.comment.show', $itr->id) }}" class="btn btn-md">Show</a>
					<a href="{{ route('admin.comment.edit', $itr->id) }}" class="btn btn-md">Edit</a>
					<form action="{{ route('admin.comment.destroy', $itr->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit">Delete</button>
					</form>
				</td>	
			</tr>
		@endforeach

	</table>
@endsection