const ctx = document.getElementById('myChart').getContext('2d');
const rounded = document.getElementById('rounded');

new Chart(ctx, {
type: 'bar',
data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
    datasets: [{
        label: '2022',
        data: [12, 19, 4, 12, 5, 9, 15,27, 20, 11, 35, 23],
        borderWidth: 1,
        backgroundColor:[
            '#2d2c5e',
            '#a2d2ff'
            ],
        }]
    },
    options: {
        responsive: true,
    }
});

new Chart(rounded, {
    type: 'doughnut',
    data: {
        labels: ['Cloud Security', 'Network Security', 'App Security', 'Endpoint Security', 'Information Security'],
        datasets: [{
        label: 'Traffic Sources',
        data: [15, 35, 21, 9, 48],
        borderWidth: 1,
        backgroundColor:[
            '#9ac5d3',
            '#141e26',
            '#cbd8df',
            '#159ab7',
            '#1e5067',
        ],
        hoverOffset: 4
        }]
    },
    options: {
       responsive: true,
    }
    });
