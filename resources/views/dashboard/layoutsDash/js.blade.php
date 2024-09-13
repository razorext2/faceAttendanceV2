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
</script>