@extends('admin.layouts.main')

@section('admin-attendence-section')

    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Student Attendance</h2>

        <!-- Time duration selection buttons -->
        <div class="mt-5 mb-3">
                <a href="{{ url('fetch-updated-data/1day') }}"><button class="btn btn-sm btn-primary" >1D</button></a>
                <a href="{{ url('fetch-updated-data/1week') }}"><button class="btn btn-sm btn-primary" >1W</button></a>
                <a href="{{ url('fetch-updated-data/1month') }}"><button class="btn btn-sm btn-primary" >1M</button></a>
                <a href="{{ url('fetch-updated-data/6months') }}"><button class="btn btn-sm btn-primary" >6M</button></a>
        </div>

        <div class="card dashboard-card mt-2">
            <div class="card-body">
                <h5 class="card-title">Student Attendance Chart</h5>
                <canvas id="siteStatisticsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Bar chart script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        console.log({!! json_encode($presentCount) !!});
        console.log({!! json_encode($studentNames) !!});
        console.log({!! json_encode($date) !!});

        document.addEventListener('DOMContentLoaded', function () {

            // Initial data
            var initialData = {
                labels: {!! json_encode($date) !!},
                datasets: [{
                    label: 'Present',
                    data: {!! json_encode($presentCount) !!},
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
                            labels: {!! json_encode($studentNames) !!},
                            beginAtZero: true
                        },
                        y: {
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
    </script>

@endsection
