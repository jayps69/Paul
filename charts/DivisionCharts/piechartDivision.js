document.addEventListener("DOMContentLoaded", function() {
     // Declare an array to store myChart instances
     var myCharts = {};

     // Array of district numbers
     var districtNumbers = ['1', '2', '3', '4', '5', '6'];
 
     // Loop through each district number and fetch data
     districtNumbers.forEach(function(districtNumber) {
         fetchDataFromPHP(districtNumber, 'piechartDivision_district' + districtNumber);
     });



    // Function to fetch data from the PHP script for a specific district
    function fetchDataFromPHP(value, canvasId) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../charts/DivisionCharts/buttonclickpiechart.php", true);
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

    // Function to update the chart with fetched data
    function updateChart(data, canvasId, districtNumber) {
        // Calculate sums for Elementary, High School, and SHS categories
        const elementarySum = data.find(item => item.label === 'ELEMENTARY').value;
        const highSchoolSum = data.find(item => item.label === 'HIGH SCHOOL').value;
        const shsSum = data.find(item => item.label === 'SHS').value;
        const districtName = getDistrictName(districtNumber);

        // Calculate overall total as the sum of Elementary, High School, and SHS counts
        const overallTotal = elementarySum + highSchoolSum + shsSum;

        const config = {
            type: 'doughnut',
            data: {
                labels: data.map(item => item.label),
                datasets: [{
                    label: 'Schools Count',
                    data: data.map(item => item.value),
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: ' TEACHERS IN DISTRICT ' + districtName,
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.formattedValue;
                                return label;
                            },
                            afterLabel: function(context) {
                                if (context.dataIndex === 0) {
                                    return 'Total Elementary: ' + elementarySum, 'Total School in DISTRICT I: '  + overallTotal ;
                                   
                                } else if (context.dataIndex === 1) {
                                    return 'Total High School: ' + highSchoolSum, 'Total School in DISTRICT I: '  + overallTotal ;
                                    
                                } else if (context.dataIndex === 2) {
                                    return 'Total SHS: ' + shsSum, 'Total School in DISTRICT I: ' + overallTotal;
                                    
                                } 
                            }
                        }
                    }
                }
            } // Close options object
        }; // Close config object

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