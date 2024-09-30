<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Not Found</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="antialiased bg-white dark:bg-gray-900">
    <div class="container px-8 mx-auto mt-32 md:mt-0">
        <div class="grid md:grid-cols-2 gap-4">
            <div class="flex flex-col md:flex-row md:h-screen justify-evenly">
                <img src="{{ asset('assets/img/500.svg') }}" alt="" class="w-64 md:w-full">
            </div>

            <div class="flex flex-col md:flex-row md:h-screen justify-evenly md:items-center">
                <div class=" mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm">
                        <span class="mb-4 text-8xl text-blue-500 font-bold">500</span>
                        <p class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 md:text-4xl dark:text-white">Internal Server Error.</p>
                        <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">We are already working to solve the problem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>