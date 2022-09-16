<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>

<body>
<header>
    @section('header')
        @include('includes.header')
    @show
</header>



@yield('content')



<footer>
    @section('footer')
        @include('includes.footer')
    @show
</footer>

</body>
</html>

