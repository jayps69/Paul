<script>
document.addEventListener('DOMContentLoaded', function() {
    // Your Chart.js configuration
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

    var myChart = new Chart(document.getElementById('stackedbar'), config); // First chart
});
</script>
