<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="ContactDetails.css">
    <style>
        #myChart {
            height: 755px !important;
        }

        #myChart2 {
            display: none;
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
                <canvas id="myChart2"></canvas>
                <!-- New canvas for myChart2 -->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js">
    </script>
    <script>
        <?php
        // Your PHP code to fetch data from the database
        $sql = "SELECT 
            COUNT(CASE WHEN `presentposition` = 'T-I' AND `gender` = 'MALE' THEN 1 END) AS T_I_Male,
            COUNT(CASE WHEN `presentposition` = 'T-I' AND `gender` = 'FEMALE' THEN 1 END) AS T_I_Female,
            COUNT(CASE WHEN `presentposition` = 'T-II' AND `gender` = 'MALE' THEN 1 END) AS T_II_Male,
            COUNT(CASE WHEN `presentposition` = 'T-II' AND `gender` = 'FEMALE' THEN 1 END) AS T_II_Female,
            COUNT(CASE WHEN `presentposition` = 'T-III' AND `gender` = 'MALE' THEN 1 END) AS T_III_Male,
            COUNT(CASE WHEN `presentposition` = 'T-III' AND `gender` = 'FEMALE' THEN 1 END) AS T_III_Female,
            COUNT(CASE WHEN `presentposition` = 'MT-I' AND `gender` = 'MALE' THEN 1 END) AS MT_I_Male,
            COUNT(CASE WHEN `presentposition` = 'MT-I' AND `gender` = 'FEMALE' THEN 1 END) AS MT_I_Female,
            COUNT(CASE WHEN `presentposition` = 'MT-II' AND `gender` = 'MALE' THEN 1 END) AS MT_II_Male,
            COUNT(CASE WHEN `presentposition` = 'MT-II' AND `gender` = 'FEMALE' THEN 1 END) AS MT_II_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-I' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_I_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-I' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_I_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-II' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_II_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-II' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_II_Female,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-III' AND `gender` = 'MALE' THEN 1 END) AS SPED_T_III_Male,
            COUNT(CASE WHEN `presentposition` = 'SPED-T-III' AND `gender` = 'FEMALE' THEN 1 END) AS SPED_T_III_Female,
            COUNT(CASE WHEN `presentposition` = 'SST-I' AND `gender` = 'MALE' THEN 1 END) AS SST_I_Male,
            COUNT(CASE WHEN `presentposition` = 'SST-I' AND `gender` = 'FEMALE' THEN 1 END) AS SST_I_Female
            FROM 
            personalinfotbl
            WHERE 
            `schooldistrict` = '1'
            AND `employmentstatus` = 'ACTIVE'";

        $result = $conn->query($sql);

        $TIMale1 = 0;
        $TIFemale1 = 0;

        $TIIMale1 = 0;
        $TIIFemale1 = 0;

        $TIIIMale1 = 0;
        $TIIIFemale1 = 0;

        $MTIMale1 = 0;
        $MTIFemale1 = 0;

        $MTIIMale1 = 0;
        $MTIIFemale1 = 0;

        $SPEDTIMale1 = 0;
        $SPEDTIFemale1 = 0;

        $SPEDTIIMale1 = 0;
        $SPEDTIIFemale1 = 0;

        $SPEDTIIIMale1 = 0;
        $SPEDTIIIFemale1 = 0;

        $SSTIMale1 = 0;
        $SSTIFemale1 = 0;

        // Initialize other variables as needed...

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $TIMale1 = $row['T_I_Male'];
            $TIFemale1 = $row['T_I_Female'];
            $TIIMale1 = $row['T_II_Male'];
            $TIIFemale1 = $row['T_II_Female'];
            $TIIIMale1 = $row['T_III_Male'];;
            $TIIIFemale1 = $row['T_III_Female'];
            $MTIMale1 = $row['MT_I_Male'];
            $MTIFemale1 = $row['MT_I_Female'];
            $MTIIMale1 = $row['MT_II_Male'];
            $MTIIFemale1 = $row['MT_II_Female'];
            $SPEDTIMale1 = $row['SPED_T_I_Male'];
            $SPEDTIFemale1 = $row['SPED_T_I_Female'];
            $SPEDTIIMale1 = $row['SPED_T_II_Male'];
            $SPEDTIIFemale1 = $row['SPED_T_II_Female'];
            $SPEDTIIIMale1 = $row['SPED_T_III_Male'];
            $SPEDTIIIFemale1 = $row['SPED_T_III_Female'];
            $SSTIMale1 = $row['SST_I_Male'];
            $SSTIFemale1 = $row['SST_I_Female'];
        }
        ?>
        document.addEventListener('DOMContentLoaded', function() {
            const labels = ['T-I', 'T-II', 'T-III', 'MT-I', 'MT-II', 'SPED-T-I', 'SPED-T-II', 'SPED-T-III', 'SST-I'];

            const data = {
                labels: labels,
                datasets: [{
                        label: 'Male',
                        data: [
                            <?php echo $TIMale1; ?>,
                            <?php echo $TIIMale1; ?>,
                            <?php echo $TIIIMale1; ?>,
                            <?php echo $MTIMale1; ?>,
                            <?php echo $MTIIMale1; ?>,
                            <?php echo $SPEDTIMale1; ?>,
                            <?php echo $SPEDTIIMale1; ?>,
                            <?php echo $SPEDTIIIMale1; ?>,
                            <?php echo $SSTIMale1; ?>
                        ],
                        backgroundColor: 'rgba(63, 182, 255, 1)',
                        borderColor: 'rgba(0,0,0, 1)',
                        borderWidth: 3,
                        stack: 'stack1'
                    },
                    {
                        label: 'Female',
                        data: [
                            <?php echo $TIFemale1; ?>,
                            <?php echo $TIIFemale1; ?>,
                            <?php echo $TIIIFemale1; ?>,
                            <?php echo $MTIFemale1; ?>,
                            <?php echo $MTIIFemale1; ?>,
                            <?php echo $SPEDTIFemale1; ?>,
                            <?php echo $SPEDTIIFemale1; ?>,
                            <?php echo $SPEDTIIIFemale1; ?>,
                            <?php echo $SSTIFemale1; ?>
                        ],
                        backgroundColor: 'rgba(227, 0, 72, 1)',
                        borderColor: 'rgba(0,0,0, 1)',
                        borderWidth: 3,
                        stack: 'stack1'
                    }
                ]
            };


            const myChart2Data = {
                labels: labels,
                datasets: [{
                        label: 'Male',
                        data: [231, 435, 678, 213, 435, 842, 584, 521, 123],
                        backgroundColor: 'rgba(63, 182, 255, .5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        stack: 'stack1' // Assigning a stack identifier for Dataset 1
                    },
                    {
                        label: 'Female',
                        data: [237, 158, 347, 972, 536, 159, 421, 123, 547],
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

            // Calculate the totals for stack1 for each section for myChart2
            const stack1TotalsBySection2 = myChart2Data.datasets.reduce((totals, dataset) => {
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
                            text: 'District I'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
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
                            grace: 20
                            
                        }
                    }
                }
            };

            var myChart = new Chart(document.getElementById('myChart'), config); // First chart

            // Create the second chart with random data
            var myChart2 = new Chart(document.getElementById('myChart2'), {
                type: 'bar',
                data: myChart2Data,
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'District II'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    var label = context.dataset.label || '';
                                    if (context.parsed.y !== null) {
                                        label += ': ' + context.parsed.y;
                                        if (context.dataset.stack === 'stack1') {
                                            label += ' (Total ' + myChart2Data.labels[context.dataIndex] + ': ' + stack1TotalsBySection2[context.dataIndex] + ')';
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
            });

            // Initially hide myChart2
            document.getElementById('myChart2').style.display = 'none';

            // Event listener for the dropdown menu
            document.getElementById('district').addEventListener('change', function() {
                var selectedDistrict = this.value;
                if (selectedDistrict === 'District I') {
                    document.getElementById('myChart').style.display = 'block'; // Show myChart
                    document.getElementById('myChart2').style.display = 'none'; // Hide myChart2
                } else if (selectedDistrict === 'District II') {
                    document.getElementById('myChart').style.display = 'none'; // Hide myChart
                    document.getElementById('myChart2').style.display = 'block'; // Show myChart2
                } else {
                    // Hide both charts or handle other districts
                    document.getElementById('myChart').style.display = 'none';
                    document.getElementById('myChart2').style.display = 'none';
                }
            });

        });
    </script>
</body>

</html>