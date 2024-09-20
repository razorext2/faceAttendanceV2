<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script>
    // next & prev button on carousel
    const scrollContainer = document.getElementById("scrollContainer");
    const nextButton = document.getElementById("nextButton");
    const prevButton = document.getElementById("prevButton");

    nextButton.addEventListener("click", () => {
        scrollContainer.scrollBy({
            left: 300,
            behavior: "smooth",
        });
    });

    prevButton.addEventListener("click", () => {
        scrollContainer.scrollBy({
            left: -300,
            behavior: "smooth",
        });
    });

    // Fungsi untuk menyembunyikan tombol jika tidak ada scrollbar
    function updateButtonVisibility() {
        const hasScroll = scrollContainer.scrollWidth > scrollContainer.clientWidth;
        nextButton.style.display = hasScroll ? "block" : "none";
        prevButton.style.display = hasScroll ? "block" : "none";
    }

    nextButton.addEventListener("click", () => {
        scrollContainer.scrollBy({
            left: 300,
            behavior: "smooth"
        });
    });

    prevButton.addEventListener("click", () => {
        scrollContainer.scrollBy({
            left: -300,
            behavior: "smooth"
        });
    });

    // Cek pada load pertama
    updateButtonVisibility();

    // Tambahkan listener untuk perubahan ukuran layar
    window.addEventListener("resize", updateButtonVisibility);

    ///////////////////////
    // enable dark mode //

    var themeToggleDarkBtn = document.getElementById('theme-toggle-dark');
    var themeToggleLightBtn = document.getElementById('theme-toggle-light');

    // Change the icons and button backgrounds based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleDarkBtn.classList.remove('text-gray-400');
        themeToggleDarkBtn.classList.add('text-gray-200');
        themeToggleLightBtn.classList.remove('text-gray-200');
        themeToggleLightBtn.classList.add('text-gray-500');
    } else {
        themeToggleLightBtn.classList.remove('text-gray-200');
        themeToggleLightBtn.classList.add('text-gray-400');
        themeToggleDarkBtn.classList.remove('text-gray-500');
        themeToggleDarkBtn.classList.add('text-gray-200');
    }

    themeToggleDarkBtn.addEventListener('click', function() {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
    });

    themeToggleLightBtn.addEventListener('click', function() {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
    });

    // end enable darkmode //
    ////////////////////////
</script>