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
            <h5 class="card-title text-center">Total Course</h5>
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
            <h5 class="card-title text-center">Total Students</h5>
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
            <h5 class="card-title text-center">Today's Present Students</h5>
            <div class="text-center">
              <h1 class="display-4"> <i class="bx bx-check"></i> {{$presentCount}}</h1>
              <a href="{{ Route('admin.attendence') }}" class="btn btn-sm btn-light mt-3">More Info</a>
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
  
  const courses = [
    { name: 'HTML', duration: 2 },
    { name: 'CSS', duration: 2 },
    { name: 'Javascript', duration: 2 },
    { name: 'C', duration: 4 },
    { name: 'PHP', duration: 8 },
    { name: 'MySQL', duration: 1 },
    { name: 'GitandGithub', duration: 1 },
    { name: 'Laravel', duration: 12 },
    { name: 'jQuery', duration: 2 },
    { name: 'Ajax', duration: 2 },
  ];

  const labels = [];
  const datasets = [];

  const startDate = new Date('2024-05'); 
  let currentMonth = startDate.getMonth();

  courses.forEach((course, index) => {
    const data = [];
    labels.push(course.name);

    for (let i = 0; i < course.duration; i++) {
      data.push({ x: currentMonth, y: course.duration });
      currentMonth++;
    }

    datasets.push({
      label: course.name,
      data: data,
      borderColor: getRandomColor(),
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
          position: 'bottom',
        },
        y: {
          title: {
            display: true,
            text: 'Course Duration (weeks)',
          },
          max: 14, 
          min: 0,
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

