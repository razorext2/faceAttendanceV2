<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>
    @include('dashboard.layoutsDash.header')
    @yield('content')
    @include('dashboard.layoutsDash.footer')
    @include('dashboard.layoutsDash.js')
</body>

</html>