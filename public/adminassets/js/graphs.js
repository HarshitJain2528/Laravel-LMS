// Sample data for course progress chart
const courseProgressData = [30, 50, 70, 90];
// Sample data for student performance chart
const studentPerformanceData = [80, 60, 75, 90];
// Sample data for attendance chart
const attendanceData = [50, 70, 85, 60];

// Get the canvas elements
const courseProgressCanvas = document.getElementById('courseProgressChart');
const studentPerformanceCanvas = document.getElementById('studentPerformanceChart');
const attendanceCanvas = document.getElementById('attendanceChart');

// Render charts using Chart.js (sample code)
new Chart(courseProgressCanvas.getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Course Progress',
            data: courseProgressData,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

new Chart(studentPerformanceCanvas.getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Quiz 1', 'Quiz 2', 'Quiz 3', 'Quiz 4'],
        datasets: [{
            label: 'Student Performance',
            data: studentPerformanceData,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

new Chart(attendanceCanvas.getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Attendance',
            data: attendanceData,
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
