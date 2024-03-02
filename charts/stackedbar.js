document.addEventListener("DOMContentLoaded", function () {
  const labels = [
    "T-I",
    "T-II",
    "T-III",
    "MT-I",
    "MT-II",
    "SPED-T-I",
    "SPED-T-II",
    "SPED-T-III",
    "SST-I",
  ];
  const data = {
    labels: labels,
    datasets: [
      {
        label: "Male",
        data: [177, 51, 72, 19, 13, 2, 1, 1, 10],
        backgroundColor: "rgba(63, 182, 255, 0.2)",
        borderColor: "rgba(63, 182, 255, 1)",
        borderWidth: 3,
        stack: "stack1",
      },
      {
        label: "Female",
        data: [672, 329, 335, 90, 39, 15, 6, 8, 3],
        backgroundColor: "rgba(227, 0, 72, 0.2)",
        borderColor: "rgba(227, 0, 72, 1)",
        borderWidth: 3,
        stack: "stack1",
      },
    ],
  };

  const config = {
    type: "bar",
    data: data,
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
            size: 16, // without "px"
            family: "Kameron", // enclosed within quotes
          },
        },
      },

      intersect: true, // Add intersect option here
    },
    plugins: [ChartDataLabels],
  };

  const ctx = document.getElementById("stackedbar");
  // Setting the canvas size to fit the chart card
  ctx.width = ctx.parentNode.clientWidth;

  new Chart(ctx, config);
});
