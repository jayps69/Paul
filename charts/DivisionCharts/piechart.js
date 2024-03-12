document.addEventListener("DOMContentLoaded", function() {
    // Function to fetch data from the PHP script
    function fetchDataFromPHP() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'charts/DivisionCharts/schoolcount.php', true); // Replace 'your_php_script.php' with the path to your PHP script
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    // Call function to update chart with fetched data
                    updateChart(data);
                } else {
                    console.error('Error fetching data: ' + xhr.status);
                }
            }
        };
        xhr.send();
    }

    // Function to update the chart with fetched data
    function updateChart(data) {
        // Calculate sums for Elementary, High School, and SHS categories
        const elementarySum = data.find(item => item.label === 'ELEMENTARY').value;
        const highSchoolSum = data.find(item => item.label === 'HIGH SCHOOL').value;
        const shsSum = data.find(item => item.label === 'SHS').value;

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
                        text: 'DISTRICT I SCHOOLS' // Your desired title here
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

        const ctx = document.getElementById('piechart');
        new Chart(ctx, config);
    } // Close updateChart function

    // Call the function to fetch data from PHP when the DOM content is loaded
    fetchDataFromPHP();
});
