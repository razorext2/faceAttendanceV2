<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@3.5.0/build/global/luxon.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>

<script>
	// preloader
	const preloader = document.querySelector('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
			preloader.remove();
		});
	}
	// end preloader

	// next & prev button on carousel
	const scrollContainer = document.getElementById("scrollContainer");
	const nextButton = document.getElementById("nextButton");
	const prevButton = document.getElementById("prevButton");

	function scrollContent(direction) {
		scrollContainer.scrollBy({
			left: direction * 300,
			behavior: "smooth",
		});
	}

	function updateButtonVisibility() {
		const hasScroll = scrollContainer.scrollWidth > scrollContainer.clientWidth;
		nextButton.style.display = prevButton.style.display = hasScroll ? "block" : "none";
	}

	nextButton.addEventListener("click", () => scrollContent(1));
	prevButton.addEventListener("click", () => scrollContent(-1));

	// Cek pada load pertama dan saat resize
	updateButtonVisibility();
	window.addEventListener("resize", updateButtonVisibility);

	///////////////////////
	// enable dark mode //
	const themeToggleDarkBtn = document.getElementById('theme-toggle-dark');
	const themeToggleLightBtn = document.getElementById('theme-toggle-light');

	function toggleTheme(isDark) {
		document.documentElement.classList.toggle('dark', isDark);
		localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
		themeToggleDarkBtn.classList.toggle('text-gray-300', isDark);
		themeToggleDarkBtn.classList.toggle('text-gray-200', !isDark);
		themeToggleLightBtn.classList.toggle('text-gray-700', isDark);
		themeToggleLightBtn.classList.toggle('text-red-400', !isDark);
	}

	const isDarkMode = localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
		.matchMedia('(prefers-color-scheme: dark)').matches);
	toggleTheme(isDarkMode);

	themeToggleDarkBtn.addEventListener('click', () => toggleTheme(true));
	themeToggleLightBtn.addEventListener('click', () => toggleTheme(false));
	// end enable dark mode //
	/////////////////////////
</script>
