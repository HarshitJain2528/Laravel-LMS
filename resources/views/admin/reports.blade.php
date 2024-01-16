@extends('admin.layouts.main')

@section('admin-reports-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Reports</h2>
        <div class="card">
            <div class="card-body">
                <!-- Course Enrollment Summary -->
                <div class="report-section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Course Enrollment Summary</h4>
                        <button class="btn btn-light btn-sm"><i class='bx bx-download'></i></button>
                    </div>
                    <p>Total courses: 20</p>
                    <p>Active courses: 15</p>
                    <p>Enrolled students: 500</p>
                </div>
                <!-- Student Performance Insights -->
                <div class="report-section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Student Performance Insights</h4>
                        <button class="btn btn-light btn-sm"><i class='bx bx-download'></i></button>
                    </div>
                    <p>Top-performing students: John Doe, Jane Smith</p>
                    <p>Lowest-performing students: Alex Johnson, Emily Brown</p>
                    <p>Course completion rate: 80%</p>
                </div>
                <!-- Attendance Overview -->
                <div class="report-section">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Attendance Overview</h4>
                        <button class="btn btn-light btn-sm"><i class='bx bx-download'></i></button>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Course</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-01-01</td>
                                <td>Mathematics</td>
                                <td>95%</td>
                            </tr>
                            <!-- Add more rows -->
                        </tbody>
                    </table>
                </div>
                <!-- Add more report sections -->
            </div>
        </div>
    </div>
@endsection
