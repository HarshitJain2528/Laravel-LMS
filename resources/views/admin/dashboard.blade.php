@extends('admin.layouts.main')

@section('admin-dashboard-section')
  @include('admin.layouts.sidebar')

  <div class="container mt-4 ml-4 p-0">
    <h2>Dashboard</h2>
    <div class="row">

      <!-- Total Students Section -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg rounded bg-warning text-white">
        <div class="card-body pb-10">
          <h5 class="card-title text-center">
             Total Course
          </h5>
          <div class="text-center">
            <h1 class="display-4"> <i class="bx bx-book-open"></i> {{ $courses }}</h1>
            <a href="{{ route('course.table') }}" class="btn btn-sm btn-light mt-3">More Info</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-lg rounded bg-primary text-white">
          <div class="card-body">
            <h5 class="card-title text-center">
                 Total Students
            </h5>
            <div class="text-center">
              <h1 class="display-4">
                <i class='bx bx-user'></i> {{ $students }}
              </h1>
              <a href="{{ route('student.table') }}" class="btn btn-sm btn-light mt-3">More Info</a>
            </div>
          </div>
        </div>
      </div>


    <!-- Today's Present Students Section -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg rounded bg-success text-white">
        <div class="card-body">
          <h5 class="card-title text-center">
                Today's Present Students
          </h5>
          <div class="text-center">
            <h1 class="display-4"> <i class="bx bx-check"></i> 50</h1> <!-- Replace with actual present student count for today -->
            <a href="{{ Route('attendence') }}" class="btn btn-sm btn-light mt-3">More Info</a> <!-- Replace 'route' with your actual route name -->
          </div>
        </div>
      </div>
    </div>

      <div class="col-md-12 mb-4">
        <div class="card shadow-lg">
          <div class="card-body">
            <h5 class="card-title text-center">Course Progress</h5>
            <div class="row">
              <div class="col-md-12 mb-4">
                <div style="height: 650px;">
                  <!-- Placeholder code for course progress chart -->
                  <canvas id="courseChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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


@endsection
