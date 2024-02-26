<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="ContactDetails.css">
    <style>
        #myChart {
            height: 755px !important;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'Templates/sidebar.php'; ?>

        <div id="content">
            <?php include 'Templates/header.php'; ?>
            <label for="district">Select District:</label>
            <select id="district" name="district">
                <option value="District I">District I</option>
                <option value="District II">District II</option>
                <option value="District III">District III</option>
                <option value="District IV">District IV</option>
                <option value="District V">District V</option>
                <option value="District VI">District VI</option>
            </select>

            <h1>Admin Dashboard</h1>
            <div class="ContactDetails-box" style="width: 100%; max-width: 1200px; height: 800px; margin: 0 auto;">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const labels = ['T-I', 'T-II', 'T-III', 'MT-I', 'MT-II', 'SPED-T-I', 'SPED-T-II', 'SPED-T-III', 'SST-I'];

            const data = {
                labels: labels,
                datasets: [
                    {
                        label: 'Male',
                        data: [851, 1553, 506, 549, 1324, 871],
                        backgroundColor: 'rgba(63, 182, 255, .5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        stack: 'stack1' // Assigning a stack identifier for Dataset 1
                    },
                    {
                        label: 'Female',
                        data: [379, 717, 229, 263, 464, 295],
                        backgroundColor: 'rgba(227, 0, 72, .5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        stack: 'stack1' // Assigning the same stack identifier for Dataset 2
                    }

                ]
            };
            // Calculate the totals for stack2 for each section
            const stack2TotalsBySection = data.datasets.reduce((totals, dataset) => {
                if (dataset.stack === 'stack2') {
                    dataset.data.forEach((value, index) => {
                        totals[index] = (totals[index] || 0) + value;
                    });
                }
                return totals;
            }, []);

            // Calculate the totals for stack1 for each section
            const stack1TotalsBySection = data.datasets.reduce((totals, dataset) => {
                if (dataset.stack === 'stack1') {
                    dataset.data.forEach((value, index) => {
                        totals[index] = (totals[index] || 0) + value;
                    });
                }
                return totals;
            }, []);

            // Update the chart configuration to display the totals for stack1 for each section
            const config = {
                type: 'bar',
                data: data,
                options: {
                    plugins: {

                        title: {
                            display: true,
                            text: 'Chart.js Bar Chart - Stacked'
                        },
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    var label = context.dataset.label || '';
                                    if (context.parsed.y !== null) {
                                        label += ': ' + context.parsed.y;
                                        if (context.dataset.stack === 'stack1') {
                                            label += ' (Total ' + data.labels[context.dataIndex] + ': ' + stack1TotalsBySection[context.dataIndex] + ')';
                                        } else if (context.dataset.stack === 'stack2') {
                                            label += ' (Total ' + data.labels[context.dataIndex] + ': ' + stack2TotalsBySection[context.dataIndex] + ')';
                                        }
                                    }
                                    return label;
                                }

                            }
                        }
                    },
                    responsive: true,
                    interaction: {
                        intersect: false,
                    },
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true,
                            grace: 500
                        }
                    }
                }
            };



            var myChart = new Chart(document.getElementById('myChart'), config);
        });
    </script>
</body>

</html>