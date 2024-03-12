document.addEventListener("DOMContentLoaded", function () {
    // Declare myChart variable outside the functions
    var myChart;
  
    // Function to fetch data from the PHP script
    function fetchDataFromPHP() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "charts/DivisionCharts/teachercount.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    // Call function to update chart with fetched data
                    updateChart(data);
                } else {
                    console.error("Error fetching data: " + xhr.status);
                }
            }
        };
        xhr.send();
    }
  
    // Function to update the chart with fetched data
    function updateChart(data) {
        // Destroy existing chart if it exists
        if (myChart) {
            myChart.destroy();
        }
  
        const labels = ["T-I", "T-II", "T-III", "MT-I", "MT-II", "SPED-T-I", "SPED-T-II", "SPED-T-III", "SST-I"];
        const maleData = data.datasets[0].data;
        const femaleData = data.datasets[1].data;
  
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
                        text: 'TEACHERS IN DISTRICT I',
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
  
        const ctx = document.getElementById("stackedbar");
  
        // Assign the new chart to the myChart variable
        myChart = new Chart(ctx, config);
    }
  
    // Call the function to fetch data from PHP when the DOM content is loaded
    fetchDataFromPHP();
  });
  