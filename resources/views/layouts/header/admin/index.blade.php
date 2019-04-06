@if (Route::has('login'))
    <div class="top-left links">
        @auth
            <a href="{{ route('admin.category.index') }}">Category</a>
            <a href="{{ route('admin.comment.index') }}">Comment</a>
            <a href="{{ route('admin.tag.index') }}">Tag</a>
            
            @yield('sub_links')

        @else
            <a href="{{ route('login') }}">Login</a>

        @endauth
    </div>
@endif

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