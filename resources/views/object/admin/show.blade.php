@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-condensed">

					<tr>
						<td>ID</td>
						<td>{{ $object->id }}</td>
					</tr>
					<tr>
						<td>Title</td>
						<td>{{ $object->title }}</td>
					</tr>
					<tr>
						<td>Author</td>
						<td>{{ $object->author }}</td>
					</tr>
					<tr>
						<td>Created at</td>
						<td>{{ $object->created_at }}</td>
					</tr>
					<tr>
						<td>Updated at</td>
						<td>{{ $object->updated_at }}</td>
					</tr>
					<tr>
						<td colspan="2">
							@foreach($object->tags as $tag)
								<span>#{{ $tag->tag }}</span>
							@endforeach
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ route('admin.'.$controller.'.edit', $object->id) }}" class="btn btn-md">Edit</a>
						</td>
						<td>
							<a href="{{ route('admin.'.$controller.'.index') }}" class="btn btn-md">Back</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection