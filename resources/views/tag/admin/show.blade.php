@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<table>
					<tr>
						<td>ID</td>
						<td>Tag</td>
						<td>Date</td>
						<td></td>
					</tr>
					<tr>
						<td>{{ $tag->id }}</td>
						<td>{{ $tag->tag }}</td>
						<td>{{ $tag->created_at }}</td>
						<td>{{ $tag->updated_at }}</td>
						<td>
							<a href="{{ route('admin.tag.edit', $tag->id) }}">Edit</a>
							<a href="{{ route('admin.tag.index') }}">Back</a>
						</td>
					</tr>
				</table>

			</div>
		</div>
	</div>
@endsection