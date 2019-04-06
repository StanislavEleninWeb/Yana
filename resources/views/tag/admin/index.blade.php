@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<td>ID</td>
						<td>Title</td>
						<td>Created at</td>
						<td>
							<a href="{{ route('admin.tag.create') }}" class="btn btn-sm btn-default">Create</a>
						</td>
					</tr>

					@foreach($tags as $itr)
						<tr>
							<td>{{ $itr->id }}</td>
							<td>{{ $itr->tag }}</td>
							<td>{{ $itr->created_at }}</td>
							<td>
								<a href="{{ route('admin.tag.show', $itr->id) }}" class="btn btn-md">Show</a>
								<a href="{{ route('admin.tag.edit', $itr->id) }}" class="btn btn-md">Edit</a>
								<form action="{{ route('admin.tag.destroy', $itr->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
							</td>
						</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>
@endsection