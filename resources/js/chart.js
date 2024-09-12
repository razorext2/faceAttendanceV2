import ApexCharts from "apexcharts";

const chartElement = document.getElementById("tooltip-chart");

if (chartElement) {
    const lateCounts = JSON.parse(chartElement.dataset.lateCounts);
    const ontimeCounts = JSON.parse(chartElement.dataset.ontimeCounts);
    const scanOutCounts = JSON.parse(chartElement.dataset.scanout);
    const dates = JSON.parse(chartElement.dataset.dates);

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
                name: "Tepat Waktu",
                data: ontimeCounts,
                color: "#3bf2ac",
            },
            {
                name: "Terlambat",
                data: lateCounts,
                color: "#f2473b",
            },
            {
                name: "Scan Keluar",
                data: scanOutCounts,
                color: "#f23b8a",
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
}
