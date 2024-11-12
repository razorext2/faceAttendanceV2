<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FaceID Attendance System</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

<!-- Favicons -->
<link href="{{ asset('assets/img/logo.ico') }}" rel="icon" />
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

<!-- images -->
<link type="image/webp" href="{{ asset('assets/img/noImage.webp') }}" rel="preload" as="image">
<link type="image/webp" href="{{ asset('assets/img/noCamera.webp') }}" rel="preload" as="image">
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect" />
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
<link
	href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
	rel="stylesheet" />

<!-- Vendor CSS Files -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.min.css" rel="stylesheet">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" />

@if (request()->is('/') || request()->is('/*'))
	<script defer src="{{ asset('face-api.min.js') }}"></script>
	<script defer src="{{ asset('script.min.js') }}"></script>
@endif
<script defer src="{{ asset('keymap.js') }}"></script>

<script>
	// On page load or when changing themes, best to add inline in `head` to avoid FOUC
	if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
			'(prefers-color-scheme: dark)').matches)) {
		document.documentElement.classList.add('dark');
	} else {
		document.documentElement.classList.remove('dark')
	}
</script>
