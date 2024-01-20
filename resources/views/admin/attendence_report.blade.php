@extends('admin.layouts.main')

@section('admin-attendence-section')

    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Student Attendance</h2>

        <!-- ... Your existing table code ... -->

        <div class="card dashboard-card">
            <div class="card-body">
                <h5 class="card-title">Student Attendance Chart</h5>
                <canvas id="siteStatisticsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Bar chart script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('siteStatisticsChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($date) !!},
                datasets: [{
                    label: 'Present',
                    data: {!! json_encode($presentCount) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Absent',
                    data: {!! json_encode($absentCount) !!},
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'category',
                        labels: {!! json_encode($studentName) !!}, // Use student names as labels
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
