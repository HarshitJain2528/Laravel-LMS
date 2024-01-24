@extends('teacher.layouts.main')

@section('teacher-student-section')
    <style>
        /* Your main stylesheet */

.current-course {
    font-weight: bold; /* Example: Make the course name bold */
    color: #3498db; /* Example: Set the text color for the course name */
}

.current-topic {
    font-style: italic; /* Example: Make the topic name italic */
    color: #27ae60; /* Example: Set the text color for the topic name */
}

    </style>
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
                                <th>Current Course</th>
                                <th>Current Topic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Student A</td>
                                <td>student_a@example.com</td>
                                <td class="current-course">Mathematics</td>
                                <td class="current-topic">Algebra</td>
                            </tr>
                            <tr>
                                <td>Student B</td>
                                <td>student_b@example.com</td>
                                <td class="current-course">Science</td>
                                <td class="current-topic">Physics</td>
                            </tr>
                            <!-- Add more rows for additional students and their respective courses and topics -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
