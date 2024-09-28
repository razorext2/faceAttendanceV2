<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.js')
</body>

</html>