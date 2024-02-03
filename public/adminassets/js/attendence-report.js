// attendance-report.js

document.addEventListener('DOMContentLoaded', function () {
    // Initial data

    var canvas = document.getElementById('siteStatisticsChart');
    var studentNames = JSON.parse(canvas.getAttribute('data-student-names'));
    var presentCount = JSON.parse(canvas.getAttribute('data-present-count'));

    var initialData = {
        labels: studentNames,
        datasets: [{
            label: 'No. of Present Days',
            data: presentCount,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    var ctx = document.getElementById('siteStatisticsChart');
    console.log('Canvas Element:', ctx);

    var myChart = new Chart(ctx.getContext('2d'), {
        type: 'bar',
        data: initialData,
        options: {
            scales: {
                x: {
                    type: 'category',
                    title: {
                        display: true,
                        text: 'Student Names'
                    },
                    labels: studentNames,
                    beginAtZero: true
                },
                y: {
                    title: {
                        display: true,
                        text: 'No. of Present Days'
                    },
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        precision: 0,
                        callback: function (value) {
                            return Number.isInteger(value) ? value : '';
                        }
                    }
                }
            }
        }
    });
});

