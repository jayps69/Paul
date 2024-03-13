document.addEventListener("DOMContentLoaded", function () {
    // Declare an array to store myChart instances
    var myCharts = {};

    // Array of district numbers
    var districtNumbers = ['1', '2', '3', '4', '5', '6'];

    // Loop through each district number and fetch data
    districtNumbers.forEach(function(districtNumber) {
        fetchDataFromPHP(districtNumber, 'stackedbarShs_district' + districtNumber);
    });

    // Function to fetch data from the PHP script for a specific district
    function fetchDataFromPHP(value, canvasId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../charts/ShsCharts/buttonclickstackedbar.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText); // Log the response from the server
                    // Parse the response as JSON
                    var data = JSON.parse(xhr.responseText);
                    // Call function to update chart with fetched data
                    updateChart(data, canvasId, value);
                } else {
                    console.error("Error fetching data: " + xhr.status);
                }
            }
        };
        xhr.send("value=" + encodeURIComponent(value));
    }

    // Function to update a specific chart with fetched data
    function updateChart(data, canvasId, districtNumber) {
        const labels = ["T-I", "T-II", "T-III", "MT-I", "MT-II", "SPED-T-I", "SPED-T-II", "SPED-T-III", "SST-I"];
        const maleData = data.datasets[0].data;
        const femaleData = data.datasets[1].data;
        const districtName = getDistrictName(districtNumber);

        const config = {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                        label: "Male",
                        data: maleData,
                        backgroundColor: "rgba(63, 182, 255, 0.2)",
                        borderColor: "rgba(63, 182, 255, 1)",
                        borderWidth: 3,
                        stack: "stack1",
                    },
                    {
                        label: "Female",
                        data: femaleData,
                        backgroundColor: "rgba(227, 0, 72, 0.2)",
                        borderColor: "rgba(227, 0, 72, 1)",
                        borderWidth: 3,
                        stack: "stack1",
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        grace: 100,
                    },
                },
                plugins: {
                    datalabels: {
                        anchor: "end",
                        align: "top",
                        formatter: (value, context) => {
                            const datasetArray = [];
                            context.chart.data.datasets.forEach((dataset) => {
                                if (dataset.data[context.dataIndex] !== undefined) {
                                    datasetArray.push(dataset.data[context.dataIndex]);
                                }
                            });

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            let sum = datasetArray.reduce(totalSum, 0);

                            if (context.datasetIndex === datasetArray.length - 1) {
                                return sum.toString();
                            } else {
                                return "";
                            }
                        },
                        font: {
                            weight: "bolder",
                            size: 14, // without "px"
                            family: "Kameron", // enclosed within quotes
                        },
                    },
                    title: {
                        display: true,
                        text: 'SHS TEACHERS IN DISTRICT ' + districtName,
                        font: {
                            size: 18,
                            weight: 'bold'
                        }
                    }
                },
                intersect: true,
            },
            plugins: [ChartDataLabels],
        };

        const ctx = document.getElementById(canvasId);

        // Check if myChart for the specified index already exists
        if (myCharts[canvasId]) {
            myCharts[canvasId].destroy(); // Destroy existing chart
        }

        // Create a new chart instance and store it in the array
        myCharts[canvasId] = new Chart(ctx, config);
    }

    // Function to get the district name based on the district number
    function getDistrictName(districtNumber) {
        const romanNumerals = ["I", "II", "III", "IV", "V", "VI"]; // Roman numerals for districts
        return romanNumerals[districtNumber - 1]; // Adjust index since array starts from 0
    }
});
