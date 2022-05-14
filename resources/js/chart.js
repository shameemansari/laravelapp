/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const pieConfig = {
    type: "doughnut",
    data: {
        datasets: [
            {
                data: [33, 33, 33],
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: ["#0694a2", "#1c64f2", "#7e3af2"],
                label: "Dataset 1",
            },
        ],
        labels: ["Shoes", "Shirts", "Bags"],
    },
    options: {
        responsive: true,
        cutoutPercentage: 80,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
            display: false,
        },
    },
};

// change this to the id of your chart element in HMTL
const pieCtx = document.getElementById("pie");
if (pieCtx) {
    window.myPie = new Chart(pieCtx, pieConfig);
}

/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const lineConfig = {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Organic",
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: "#0694a2",
                borderColor: "#0694a2",
                data: [43, 48, 40, 54, 67, 73, 70],
                fill: false,
            },
            {
                label: "Paid",
                fill: false,
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: "#7e3af2",
                borderColor: "#7e3af2",
                data: [24, 50, 64, 74, 52, 51, 65],
            },
        ],
    },
    options: {
        responsive: true,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
            display: false,
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true,
        },
        scales: {
            x: {
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: "Month",
                },
            },
            y: {
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: "Value",
                },
            },
        },
    },
};

// change this to the id of your chart element in HMTL
const lineCtx = document.getElementById("line");
if (lineCtx) {
    window.myLine = new Chart(lineCtx, lineConfig);
}

/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const barConfig = {
    type: "bar",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
        ],
        datasets: [
            {
                label: "Shoes",
                backgroundColor: "#0694a2",
                // borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [-3, 14, 52, 74, 33, 90, 70],
            },
            {
                label: "Bags",
                backgroundColor: "#7e3af2",
                // borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [66, 33, 43, 12, 54, 62, 84],
            },
        ],
    },
    options: {
        responsive: true,
        legend: {
            display: false,
        },
    },
};

const barsCtx = document.getElementById("bars");
if (barsCtx) {
    window.myBar = new Chart(barsCtx, barConfig);
}
