import ApexCharts from "apexcharts";

const globalOptions = {
    chart: {
        height: "100%",
        width: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        dropShadow: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
        animations: {
            enabled: true,
        },
    },
    tooltip: {
        enabled: false,
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 2,
    },
    grid: {
        show: false,
    },
    xaxis: {
        labels: {
            show: false,
        },
    },
    yaxis: {
        show: false,
    },
};

const bigChart = document.getElementById("tooltip-chart");
const cardLate = document.getElementById("cardLate-chart");
const cardOntime = document.getElementById("cardOntime-chart");
const cardOuttime = document.getElementById("cardOuttime-chart");
const kecepatan = document.getElementById("Cardkecepatan-chart");

if (bigChart) {
    const lateCounts = JSON.parse(bigChart.dataset.lateCounts);
    const ontimeCounts = JSON.parse(bigChart.dataset.ontimeCounts);
    const outtimeCounts = JSON.parse(bigChart.dataset.outtimeCounts);
    const fastCounts = JSON.parse(bigChart.dataset.fastCounts);
    const dates = JSON.parse(bigChart.dataset.dates);

    const options = {
        ...globalOptions,
        dataLabels: {
            enabled: true,
        },
        tooltip: {
            enabled: true,
            x: {
                show: true,
            },
            y: {
                show: true,
            },
        },
        series: [
            {
                name: "Masuk Tepat Waktu",
                data: ontimeCounts,
                color: "#22c55e",
            },
            {
                name: "Terlambat",
                data: lateCounts,
                color: "#f43f5e",
            },

            {
                name: "Keluar Tepat Waktu",
                data: outtimeCounts,
                color: "#06b6d4",
            },
            {
                name: "Kecepatan Pulang",
                data: fastCounts,
                color: "#ec4899",
            },
        ],
        xaxis: {
            categories: dates,
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
                    return value + " Orang";
                },
            },
        },
    };

    const chart = new ApexCharts(bigChart, options);
    chart.render();
}

if (cardLate) {
    const lateCounts = JSON.parse(cardLate.dataset.lateCounts);

    const options = {
        ...globalOptions,
        series: [
            {
                name: "Terlambat",
                data: lateCounts,
            },
        ],
        stroke: {
            width: 2,
            colors: "#FFF000",
        },
        fill: {
            type: "solid",
            colors: "#FFF",
        },
    };

    const chart = new ApexCharts(cardLate, options);
    chart.render();
}

if (cardOntime) {
    const ontimeCounts = JSON.parse(cardOntime.dataset.ontimeCounts);

    const options = {
        ...globalOptions,
        series: [
            {
                name: "Tepat Waktu",
                data: ontimeCounts,
            },
        ],
        stroke: {
            type: "solid",
            width: 2,
            colors: "#FFF000",
        },
        fill: {
            type: "solid",
            colors: "#FFF",
        },
    };

    const chart = new ApexCharts(cardOntime, options);
    chart.render();
}

if (cardOuttime) {
    const outtimeCounts = JSON.parse(cardOuttime.dataset.outtimeCounts);

    const options = {
        ...globalOptions,
        series: [
            {
                name: "Tepat Waktu",
                data: outtimeCounts,
            },
        ],
        stroke: {
            type: "solid",
            width: 2,
            colors: "#FFF000",
        },
        fill: {
            type: "solid",
            colors: "#FFF",
        },
    };

    const chart = new ApexCharts(cardOuttime, options);
    chart.render();
}

if (kecepatan) {
    const fastCounts = JSON.parse(kecepatan.dataset.fastCounts);

    const options = {
        ...globalOptions,
        series: [
            {
                name: "Tepat Waktu",
                data: fastCounts,
            },
        ],
        stroke: {
            type: "solid",
            width: 2,
            colors: "#FFF000",
        },
        fill: {
            type: "solid",
            colors: "#FFF",
        },
    };

    const chart = new ApexCharts(kecepatan, options);
    chart.render();
}
