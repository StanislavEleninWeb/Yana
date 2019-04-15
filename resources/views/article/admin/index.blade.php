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

					

				</table>
			</div>
		</div>
	</div>
@endsection