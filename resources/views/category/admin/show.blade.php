@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table>
					<tr>
						<td>ID</td>
						<td>{{ $category->id }}</td>
					</tr>
					<tr>
						<td>Title</td>
						<td>{{ $category->title }}</td>
					</tr>
					<tr>
						<td>Parent</td>
						<td>{{ $category->parent_id }}</td>
					</tr>
					<tr>
						<td>Url</td>
						<td>{{ $category->url }}</td>
					</tr>
					<tr>
						<td>Sortorder</td>
						<td>{{ $category->sortorder }}</td>
					</tr>
					<tr>
						<td>Active</td>
						<td>{{ $category->active }}</td>
					</tr>
					<tr>
						<td>Created at</td>
						<td>{{ $category->created_at }}</td>
					</tr>
					<tr>
						<td>Updated at</td>
						<td>{{ $category->Updated_at }}</td>
					</tr>
					<tr>
						<td>
							<a href="{{ route('admin.category.edit', $category->id) }}">Edit</a>
						</td>
						<td><a href="{{ route('admin.category.index') }}">Back</a></td>
					</tr>
				</table>
			</div>
		</div>		
	</div>
@endsection