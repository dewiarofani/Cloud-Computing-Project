var ctx2 = document.getElementById('doughnut').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Lainnya'],

        datasets: [{
            label: 'Kota Surakarta',
            data: [450392, 79819, 40491, 3584, 378, 1329, 151],
            backgroundColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3',
                '#D21312',
                '#FF6000'

            ],
            borderColor: [
                '#1D267D',
                '#FF6969',
                '#00FFCA',
                '#F7D060',
                '#917FB3',
                '#D21312',
                '#FF6000'

            ],
            borderWidth: 1
        }]

    },
    options: {
        responsive: true
    }
});