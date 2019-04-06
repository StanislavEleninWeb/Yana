@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('admin.admin.index') }}">Admin</a>
            <a href="{{ route('admin.admin.index') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

@include('layouts.errors.massage')
@include('layouts.success.massage')



	
