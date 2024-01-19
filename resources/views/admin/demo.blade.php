<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Completion Timeline</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="container mt-5">
    <canvas id="courseChart"></canvas>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Course data with start month and completion percentage
      const courses = [
        { name: 'C', startMonth: '2024-01', duration: 4, completion: 80 },
        { name: 'HTML', startMonth: '2024-02', duration: 2, completion: 60 },
        { name: 'CSS', startMonth: '2024-04', duration: 3, completion: 70 },
        // Add other courses with their details
      ];

      const labels = [];
      const datasets = [];

      courses.forEach((course, index) => {
        const data = [];
        const startDate = new Date(course.startMonth);
        labels.push(course.startMonth);

        for (let i = 0; i <= course.duration; i++) {
          const month = startDate.getMonth() + i;
          data.push({ x: month, y: course.completion });
        }

        datasets.push({
          label: course.name,
          data: data,
          borderColor: getRandomColor(), // Function to get random colors
          fill: false
        });
      });

      const ctx = document.getElementById('courseChart').getContext('2d');
      const chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: datasets
        },
        options: {
          scales: {
            x: {
              type: 'linear',
              position: 'bottom'
            },
            y: {
              max: 100,
              min: 0
            }
          }
        }
      });

      function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
          color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
      }
    });
  </script>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
