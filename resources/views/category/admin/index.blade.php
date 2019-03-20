@extends('layouts.index_admin')

@section('title', 'Category')

@section('sub_links')
	<div class="top-left-down links">
        <a href="{{ route('admin.category.index') }}">List</a>
        <a href="{{ route('admin.category.create') }}">Create</a>
    </div>
@endsection

@section('content')
	<table>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Active</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->title }}</td>
				<td>{{ $category->active }}</td>
				<td>
					<a href="{{ route('admin.category.show', $category->id) }}">show</a>
				</td>
				<td>
					<a href="{{ route('admin.category.edit', $category->id) }}">edit</a>
				</td>
				<td>
					<a href="{{ route('admin.category.destroy', $category->id) }}">del</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection