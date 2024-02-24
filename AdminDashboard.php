<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="ContactDetails.css">
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'Templates/sidebar.php'; ?>

        <div id="content">
            <?php include 'Templates/header.php'; ?>

            <h1>Admin Dashboard</h1>
            <div class="ContactDetails-box" style="width: 1500px; height: 800px;">

            <canvas id="myChart" width="1000px" height="520px"></canvas>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
                <script>
                    // Define your chart data and configuration
                    const DATA_COUNT = 6;
                    const labels = Array.from({ length: DATA_COUNT }, (_, i) => `District ${i + 1}`);
                    const data = {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Dataset 1',
                                data: Array.from({ length: DATA_COUNT }, () => Math.random() * 100),
                                backgroundColor: 'rgba(255, 99, 132, 0.2)', // Red
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Dataset 2',
                                data: Array.from({ length: DATA_COUNT }, () => Math.random() * 100),
                                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Blue
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Dataset 3',
                                data: Array.from({ length: DATA_COUNT }, () => Math.random() * 100),
                                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Green
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }
                        ]
                    };

                    // Define the chart configuration
                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Chart.js Bar Chart - Stacked'
                                },
                            },
                            responsive: true,
                            scales: {
                                x: {
                                    stacked: true,
                                },
                                y: {
                                    stacked: true
                                }
                            }
                        }
                    };

                    // Get the canvas element where the chart will be rendered
                    const ctx = document.getElementById('myChart').getContext('2d');

                    // Create the chart instance
                    const myChart = new Chart(ctx, config);
                </script>
            </div>
        </div>
    </div>
</body>

</html>
