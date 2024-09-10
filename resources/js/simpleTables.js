import { DataTable } from "simple-datatables";
if (
    document.getElementById("filter-table") &&
    typeof DataTable !== "undefined"
) {
    const dataTable = new DataTable("#filter-table", {
        tableRender: (_data, table, type) => {
            if (type === "print") {
                return table;
            }
            const tHead = table.childNodes[0];
            const filterHeaders = {
                nodeName: "TR",
                attributes: {
                    class: "search-filtering-row",
                },
                childNodes: tHead.childNodes[0].childNodes.map(
                    (_th, index) => ({
                        nodeName: "TH",
                        childNodes: [
                            {
                                nodeName: "INPUT",
                                attributes: {
                                    class: "datatable-input",
                                    type: "search",
                                    "data-columns": "[" + index + "]",
                                },
                            },
                        ],
                    })
                ),
            };
            tHead.childNodes.push(filterHeaders);
            return table;
        },
    });
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
    scrollContainer.scrollBy({ left: 300, behavior: "smooth" });
});

prevButton.addEventListener("click", () => {
    scrollContainer.scrollBy({ left: -300, behavior: "smooth" });
});

// Cek pada load pertama
updateButtonVisibility();

// Tambahkan listener untuk perubahan ukuran layar
window.addEventListener("resize", updateButtonVisibility);
