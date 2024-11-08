/**
 * Template Name: QuickStart
 * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

(function () {
    "use strict";

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    function toggleScrolled() {
        const selectBody = document.querySelector("body");
        const selectHeader = document.querySelector("#header");
        return;
        window.scrollY > 100
            ? selectBody.classList.add("scrolled")
            : selectBody.classList.remove("scrolled");
    }

    document.addEventListener("scroll", toggleScrolled);
    window.addEventListener("load", toggleScrolled);

    /**
     * Toggle mobile nav dropdowns
     */
    document
        .querySelectorAll(".navmenu .toggle-dropdown")
        .forEach((navmenu) => {
            navmenu.addEventListener("click", function (e) {
                e.preventDefault();
                this.parentNode.classList.toggle("active");
                this.parentNode.nextElementSibling.classList.toggle(
                    "dropdown-active"
                );
                e.stopImmediatePropagation();
            });
        });

    /**
     * Preloader
     */
    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
        AOS.init({
            duration: 600,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    }
    window.addEventListener("load", aosInit);

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener("load", function (e) {
        if (window.location.hash) {
            if (document.querySelector(window.location.hash)) {
                setTimeout(() => {
                    let section = document.querySelector(window.location.hash);
                    let scrollMarginTop =
                        getComputedStyle(section).scrollMarginTop;
                    window.scrollTo({
                        top: section.offsetTop - parseInt(scrollMarginTop),
                        behavior: "smooth",
                    });
                }, 100);
            }
        }
    });

    /**
     * Navmenu Scrollspy
     */
    let navmenulinks = document.querySelectorAll(".navmenu a");

    function navmenuScrollspy() {
        navmenulinks.forEach((navmenulink) => {
            if (!navmenulink.hash) return;
            let section = document.querySelector(navmenulink.hash);
            if (!section) return;
            let position = window.scrollY + 200;
            if (
                position >= section.offsetTop &&
                position <= section.offsetTop + section.offsetHeight
            ) {
                document
                    .querySelectorAll(".navmenu a.active")
                    .forEach((link) => link.classList.remove("active"));
                navmenulink.classList.add("active");
            } else {
                navmenulink.classList.remove("active");
            }
        });
    }
    window.addEventListener("load", navmenuScrollspy);
    document.addEventListener("scroll", navmenuScrollspy);
})();

// Get the toast element
const toast = document.getElementById("toast-bottom-right");

// Function to show the toast with animation
function showToast() {
    if (toast) {
        // Check if the element exists
        toast.classList.remove("opacity-0", "transform", "scale-90"); // Remove initial hidden state
        toast.classList.add("opacity-100", "scale-100"); // Add visible state
    }
}

// Function to hide the toast with animation
function hideToast() {
    if (toast) {
        // Check if the element exists
        toast.classList.add("opacity-0", "scale-90"); // Add hidden state
        toast.classList.remove("opacity-100", "scale-100"); // Remove visible state

        // Remove the toast from the DOM after the animation completes
        setTimeout(() => {
            toast.remove();
        }, 300); // 300 milliseconds for the transition to complete
    }
}

// Show the toast with fade-in and scale effect
setTimeout(showToast, 100); // Delay for the initial animation to allow rendering

// Auto-close the toast after 5 seconds with fade-out and scale effect
setTimeout(hideToast, 5000);

//////////////////////
//Dark Mode//

var themeToggleDarkBtn = document.getElementById("theme-toggle-dark");
var themeToggleLightBtn = document.getElementById("theme-toggle-light");

// Change the icons and button backgrounds based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleDarkBtn.classList.remove("text-gray-400");
    themeToggleDarkBtn.classList.add("text-gray-200");
    themeToggleLightBtn.classList.remove("text-gray-200");
    themeToggleLightBtn.classList.add("text-gray-500");
} else {
    themeToggleLightBtn.classList.remove("text-gray-200");
    themeToggleLightBtn.classList.add("text-gray-400");
    themeToggleDarkBtn.classList.remove("text-gray-500");
    themeToggleDarkBtn.classList.add("text-gray-200");
}

themeToggleDarkBtn.addEventListener("click", function () {
    document.documentElement.classList.add("dark");
    localStorage.setItem("color-theme", "dark");
});

themeToggleLightBtn.addEventListener("click", function () {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("color-theme", "light");
});

///////////////////
// end darkmode //
