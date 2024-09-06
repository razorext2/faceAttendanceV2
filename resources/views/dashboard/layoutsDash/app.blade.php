<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layoutsDash.head')
</head>

<body>

    @include('dashboard.layoutsDash.navbar')
    @include('dashboard.layoutsDash.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-20">
            @include('dashboard.layoutsDash.breadcumb')
            @yield('content')
        </div>
        @include('dashboard.layoutsDash.footer')
    </div>
    <!-- footer -->

    <!-- js -->
    @include('dashboard.layoutsDash.js')
</body>

</html>