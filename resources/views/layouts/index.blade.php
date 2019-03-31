<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@section('title')Laravel@show</title>

        @section('css')
            @include('layouts.css.css')
        @show
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('header')
                @include('layouts.header.index')
            @show

            @yield('content')
        </div>

        @section('footer')
            @include('layouts.footer.index')
        @show

        @section('js')
            @include('layouts.js.js');
        @show
    </body>
</html>
