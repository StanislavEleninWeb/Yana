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
							<a href="{{ route('admin.'.strtolower($controller).'.create') }}" class="btn btn-md btn-success">Create</a>
						</td>
					</tr>

					@foreach($objects as $object)
						<tr>
							<td>{{ $object->id }}</td>
							<td>{{ $object->title }}</td>
							<td>{{ $object->created_at }}</td>
							<td>
								<a href="{{ route('admin.'.strtolower($controller).'.show', $object->id) }}" class="btn btn-md btn-info">Show</a>
								<a href="{{ route('admin.'.strtolower($controller).'.edit', $object->id) }}" class="btn btn-md btn-warning">Edit</a>
								<a href="{{ route('admin.'.strtolower($controller).'.destroy', $object->id) }}" class="btn btn-md btn-danger">Delete</a>
							</td>
						</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>
@endsection