let startClicked = false; // Track whether startButton has been clicked
let isMenuOpen = false;

document.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        handleEnterKey();
    } else if (event.key === "-") {
        handleMinusKey();
    } else if (event.key === "/") {
        slashKey();
    } else if (event.key === "*") {
        location.reload();
    } else if (event.key === "+") {
        window.location.href = "/#Scan";
    }
});

function slashKey() {
    if (currentUrl === "/") {
        // Jika berada di halaman index, arahkan ke /photo-regist
        window.location.href = "/photo-regist#Scan";
    } else if (currentUrl === "/photo-regist") {
        // Jika berada di halaman /photo-regist, arahkan ke halaman index
        window.location.href = "/#Scan";
    }
}

function handleEnterKey() {
    const startButton = document.getElementById("startButton");
    const endButton = document.getElementById("endAttendance");

    if (startButton) {
        if (!startClicked) {
            // If the start button has not been clicked, click it
            startButton.click();
            startClicked = true; // Update the state
        } else {
            // If the start button has been clicked, click the end button
            if (endButton) {
                endButton.click();
                startClicked = false; // Reset the state
            }
        }
    }
}

function handleMinusKey() {
    const menuButton = document.getElementById(
        "mega-menu-full-dropdown-button"
    );
    const scanSection = document.getElementById("Scan");

    if (isMenuOpen) {
        // When menu is open, scroll to the 'Scan' section and simulate a click

        scanSection.scrollIntoView({ behavior: "smooth", block: "center" });

        menuButton.click();
        scanSection.focus;
        // Click on the menu button to potentially close the menu
        isMenuOpen = false;
    } else {
        // When menu is closed, click on the menu button to open it
        menuButton.scrollIntoView({ behavior: "smooth", block: "center" });
        menuButton.click();
        menuButton.focus();
        isMenuOpen = true;
    }
}
