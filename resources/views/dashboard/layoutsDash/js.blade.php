<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }

    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown-example');
        const arrowIcon = document.getElementById('arrow-icon');

        dropdown.classList.toggle('hidden');
        if (!dropdown.classList.contains('hidden')) {
            dropdown.style.height = dropdown.scrollHeight + 'px';
            arrowIcon.classList.add('rotate-180');
        } else {
            dropdown.style.height = '0px';
            arrowIcon.classList.remove('rotate-180');
        }
    }

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
</script>