// Color Variables
const cyanColor = '#28dac6';
let borderColor, gridColor, tickColor;
if (isDarkStyle) {
  borderColor = 'rgba(100, 100, 100, 1)';
  gridColor = 'rgba(100, 100, 100, 1)';
  tickColor = 'rgba(255, 255, 255, 0.75)'; // x & y axis tick color
} else {
  borderColor = '#f0f0f0';
  gridColor = '#f0f0f0';
  tickColor = 'rgba(0, 0, 0, 0.75)'; // x & y axis tick color
}
const barChart = document.getElementById('barChart');
if (barChart) {
  const barChartVar = new Chart(barChart, {
    type: 'bar',
    data: {
      labels: [
        '7/12',
        '8/12',
        '9/12',
        '10/12',
        '11/12',
        '12/12',
        '13/12',
        '14/12',
        '15/12',
        '16/12',
        '17/12',
        '18/12',
        '19/12'
      ],
      datasets: [
        {
          data: [275, 90, 190, 205, 125, 85, 55, 87, 127, 150, 230, 280, 190],
          backgroundColor: cyanColor,
          borderColor: 'transparent',
          maxBarThickness: 15,
          borderRadius: {
            topRight: 15,
            topLeft: 15
          }
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: {
        duration: 500
      },
      plugins: {
        tooltip: {
          rtl: isRtl,
          backgroundColor: config.colors.white,
          titleColor: config.colors.black,
          bodyColor: config.colors.black,
          borderWidth: 1,
          borderColor: borderColor
        },
        legend: {
          display: false
        }
      },
      scales: {
        x: {
          grid: {
            color: gridColor,
            borderColor: borderColor
          },
          ticks: {
            color: tickColor
          }
        },
        y: {
          min: 0,
          max: 400,
          grid: {
            color: gridColor,
            borderColor: borderColor
          },
          ticks: {
            stepSize: 100,
            tickColor: gridColor,
            color: tickColor
          }
        }
      }
    }
  });
}