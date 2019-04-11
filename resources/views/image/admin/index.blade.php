@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<td>ID</td>
						<td></td>
						<td>Name</td>
						<td>Ext</td>
						<td>Author</td>
						<td>Title</td>
						<td>Created at</td>
						<td>
							<a href="{{ route('admin.image.create') }}" class="btn btn-md btn-success">Create</a>
						</td>
					</tr>

					@foreach($images as $itr)
						<tr>
							<td>{{ $itr->id }}</td>
							<td>
								<img src="{{ asset('/images/' . (int) ($itr->id/1000) . '/' . $itr->file_name . '.' . $itr->file_ext) }}" alt="{{ $itr->title }}" title="{{ $itr->title }}" class="image image-responsive">
							</td>
							<td>{{ $itr->file_name }}</td>
							<td>{{ $itr->file_ext }}</td>
							<td>{{ $itr->author }}</td>
							<td>{{ $itr->title }}</td>
							<td>{{ $itr->created_at }}</td>
							<td>
								<a href="{{ route('admin.image.show', $itr->id) }}" class="btn btn-md">Show</a>
								<a href="{{ route('admin.image.edit', $itr->id) }}" class="btn btn-md">Edit</a>
								<form action="{{ route('admin.image.destroy', $itr->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<input type="submit" name="submit" value="Delete" class="btn btn-md">
								</form>
							</td>
						</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>
@endsection