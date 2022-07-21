const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2019', '2020', '2021', '2022'],
        datasets: [{
            label: 'Jumlah Kasus',
            data: [4061, 4314, 4442, 4590],
            backgroundColor: [
                'rgba(186, 104, 200)',
                'rgba(186, 104, 200)',
                'rgba(186, 104, 200)',                
                'rgba(186, 104, 200)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                
                'rgba(255, 159, 64, 1)'
            ],
            // borderWidth: 1
        }]
    },
    options: {
        responsive: true, 

    }
});