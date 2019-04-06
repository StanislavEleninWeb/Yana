@extends('layouts.index_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table>
					<tr>
						<td>Id</td>
						<td>{{ $comment->id }}</td>
					</tr>
					<tr>
						<td>Commentable_id</td>
						<td>{{ $comment->commentable_id }}</td>
					</tr>
					<tr>
						<td>Commentable_type</td>
						<td>{{ $comment->commentable_type }}</td>
					</tr>
					<tr>
						<td>Authror</td>
						<td>{{ $comment->author }}</td>
					</tr>
					<tr>
						<td>Comment</td>
						<td>{{ $comment->comment }}</td>
					</tr>
					<tr>
						<td>Parent ID</td>
						<td>{{ $comment->parent_id }}</td>
					</tr>
					<tr>
						<td>Owner ID</td>
						<td>{{ $comment->owner_id}}</td>
					</tr>
					<tr>
						<td>IP</td>
						<td>{{ $comment->ip }}</td>
					</tr>
					<tr>
						<td>Flag</td>
						<td>{{ $comment->flag }}</td>
					</tr>
					<tr>
						<td>Created_at</td>
						<td>{{$comment->created_at}}</td>
					</tr>
					<tr>
						<td>Updated at</td>
						<td>{{ $comment->updated_at }}</td>
					</tr>
				</table>

				<a href="{{ route('admin.comment.index') }}" class="btn btn-md btn-default">Back</a>
			</div>
		</div>
	</div>
@endsection