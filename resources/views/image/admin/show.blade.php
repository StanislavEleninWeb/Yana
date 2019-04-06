@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-condensed">
					<tr>
						<td>
							<img src="">
						</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>{{ $image->id }}</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>{{ $image->file_name }}</td>
					</tr>
					<tr>
						<td>Ext</td>
						<td>{{ $image->file_ext }}</td>
					</tr>
					<tr>
						<td>Author</td>
						<td>{{ $image->author }}</td>
					</tr>
					<tr>
						<td>Title</td>
						<td>{{$image->title}}</td>
					</tr>
					<tr>
						<td>Created at</td>
						<td>{{ $image->created_at }}</td>
					</tr>
					<tr>
						<td>Updated at</td>
						<td>{{ $image->updated_at }}</td>
					</tr>
					<tr>
						<td colspan="2">
							@foreach($image->tags as $tag)
								<span>#{{ $tag->tag }}</span>
							@endforeach
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ route('admin.image.edit', $image->id) }}" class="btn btn-md">Edit</a>
						</td>
						<td>
							<a href="{{ route('admin.image.index') }}" class="btn btn-md">Back</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection