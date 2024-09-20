<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title>FaceID Attendance System</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect" />
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

<!-- Vendor CSS Files -->
@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js', 'resources/js/simpleTables.js', 'resources/js/alpine.js'])
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />

<style>
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        transition: width 0.3s ease;
        scrollbar-width: thin;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        transition: opacity 0.5s ease;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: rgba(0, 0, 0, 0.2);
        /* Darken the scrollbar thumb on hover */
    }

    .swiper {
        width: 600px;
        height: 300px;
    }
</style>

<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>