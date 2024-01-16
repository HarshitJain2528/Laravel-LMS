@extends('teacher.layouts.main')

@section('teacher-student-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Student Information Table -->
            <div class="student-information p-4 mb-4 border rounded">
                <h3 class="mb-3">Student Information</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Progress</th> <!-- New column for progress -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Student A</td>
                                <td>student_a@example.com</td>
                                <td>123-456-7890</td>
                                <td>
                                    75% <!-- Replace with dynamic data -->
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Student B</td>
                                <td>student_b@example.com</td>
                                <td>987-654-3210</td>
                                <td>
                                    90% <!-- Replace with dynamic data -->
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Add more rows for additional students -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
