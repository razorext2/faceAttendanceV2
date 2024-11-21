<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@3.5.0/build/global/luxon.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

@push('script')
	<script>
		const preloader = document.querySelector("#preloader");
		preloader && window.addEventListener("load", (() => {
			preloader.remove()
		}));
		const scrollContainer = document.getElementById("scrollContainer"),
			nextButton = document.getElementById("nextButton"),
			prevButton = document.getElementById("prevButton");

		function scrollContent(e) {
			scrollContainer.scrollBy({
				left: 300 * e,
				behavior: "smooth"
			})
		}

		function updateButtonVisibility() {
			const e = scrollContainer.scrollWidth > scrollContainer.clientWidth;
			nextButton.style.display = prevButton.style.display = e ? "block" : "none"
		}
		nextButton.addEventListener("click", (() => scrollContent(1))), prevButton.addEventListener("click", (() =>
			scrollContent(-1))), updateButtonVisibility(), window.addEventListener("resize", updateButtonVisibility);
		const themeToggleDarkBtn = document.getElementById("theme-toggle-dark"),
			themeToggleLightBtn = document.getElementById("theme-toggle-light");

		function toggleTheme(e) {
			document.documentElement.classList.toggle("dark", e), localStorage.setItem("color-theme", e ? "dark" : "light"),
				themeToggleDarkBtn.classList.toggle("text-gray-300", e), themeToggleDarkBtn.classList.toggle("text-gray-200", !
					e), themeToggleLightBtn.classList.toggle("text-gray-700", e), themeToggleLightBtn.classList.toggle(
					"text-red-400", !e)
		}
		const isDarkMode = "dark" === localStorage.getItem("color-theme") || !("color-theme" in localStorage) && window
			.matchMedia("(prefers-color-scheme: dark)").matches;
		toggleTheme(isDarkMode), themeToggleDarkBtn.addEventListener("click", (() => toggleTheme(!0))), themeToggleLightBtn
			.addEventListener("click", (() => toggleTheme(!1)));
	</script>
@endpush
@stack('script')
