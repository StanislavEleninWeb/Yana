@if($errors->has('errors'))
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
		        <li>{{ $error }}</li>
		    @endforeach
        </ul>
    </div>
@endif