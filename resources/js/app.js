import { DataTable } from "simple-datatables";
import ApexCharts from "apexcharts";
import "./bootstrap"; // Ensure bootstrap is imported if necessary
import "flowbite"; // Ensure flowbite is imported if necessary

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

const options = {
    // set this option to enable the tooltip for the chart, learn more here: https://apexcharts.com/docs/tooltip/
    tooltip: {
        enabled: true,
        x: {
            show: true,
        },
        y: {
            show: true,
        },
    },
    grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
            left: 2,
            right: 2,
            top: -26,
        },
    },
    series: [
        {
            name: "Developer Edition",
            data: [1500, 1418, 1456, 1526, 1356, 1256],
            color: "#1A56DB",
        },
        {
            name: "Designer Edition",
            data: [643, 413, 765, 412, 1423, 1731],
            color: "#7E3BF2",
        },
    ],
    chart: {
        height: "100%",
        maxWidth: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    legend: {
        show: true,
    },
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 6,
    },
    xaxis: {
        categories: [
            "01 February",
            "02 February",
            "03 February",
            "04 February",
            "05 February",
            "06 February",
            "07 February",
        ],
        labels: {
            show: false,
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        show: false,
        labels: {
            formatter: function (value) {
                return "$" + value;
            },
        },
    },
};

if (
    document.getElementById("tooltip-chart") &&
    typeof ApexCharts !== "undefined"
) {
    const chart = new ApexCharts(
        document.getElementById("tooltip-chart"),
        options
    );
    chart.render();
}
