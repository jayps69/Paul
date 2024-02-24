<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="ContactDetails.css">
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'Templates/sidebar.php'; ?>

        <div id="content">
            <?php include 'Templates/header.php'; ?>

            <h1>Admin Dashboard</h1>
            <div class="ContactDetails-box" style="width: 100%; max-width: 1200px; margin: 0 auto;">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
            const NUMBER_CFG = { count: 7, min: -100, max: 100 };
            const data = {
                labels: labels,
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [10, 20, 30, 40, 50, 60, 70],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        stack: 'stack1' // Assigning a stack identifier for Dataset 1
                    },
                    {
                        label: 'Dataset 2',
                        data: [15, 25, 35, 45, 55, 65, 75],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        stack: 'stack1' // Assigning the same stack identifier for Dataset 2
                    },
                    {
                        label: 'Dataset 3',
                        data: [5, 10, 15, 20, 25, 30, 35],
                        backgroundColor: 'rgba(255, 206, 86, 0.5)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1,
                        stack: 'stack2' // Assigning a different stack identifier for Dataset 3
                    },
                    {
                        label: 'Dataset 4',
                        data: [8, 16, 24, 32, 40, 48, 56],
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        stack: 'stack2' // Assigning the same stack identifier for Dataset 4
                    }
                    // Add more datasets if needed
                ]
            };
      // Calculate the totals for stack2 for each month
const stack2TotalByMonth = data.labels.map((month, index) => {
    return data.datasets.reduce((total, dataset) => {
        if (dataset.stack === 'stack2') {
            return total + dataset.data[index];
        }
        return total;
    }, 0);
});

// Update the chart configuration to display the totals for stack2 for each month
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
                    label: function(context) {
                        var label = context.dataset.label || '';
                        if (context.parsed.y !== null) {
                            label += ': ' + context.parsed.y;
                            if (context.dataset.stack === 'stack2') {
                                label += ' (Total ' + data.labels[context.dataIndex] + ': ' + stack2TotalByMonth[context.dataIndex] + ')';
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
                stacked: true
            }
        }
    }
};


            var myChart = new Chart(document.getElementById('myChart'), config);
        });
    </script>
</body>

</html>