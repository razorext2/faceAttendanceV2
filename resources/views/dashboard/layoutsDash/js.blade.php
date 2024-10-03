<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<script>
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

    const isDarkMode = localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
    toggleTheme(isDarkMode);

    themeToggleDarkBtn.addEventListener('click', () => toggleTheme(true));
    themeToggleLightBtn.addEventListener('click', () => toggleTheme(false));
    // end enable dark mode //
    /////////////////////////

    /////////////////////////
    // delete modal //

    document.addEventListener('DOMContentLoaded', function() {

        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteForm = document.getElementById('deleteForm');
        const currentRoute = '{{ request()->segment(2) }}';

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-id');
                const actionUrl = `${currentRoute}/delete/${itemId}`;
                deleteForm.setAttribute('action', actionUrl);
            });
        });
    });
    // end delete modal //
    /////////////////////
</script>