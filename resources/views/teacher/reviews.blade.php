@extends('teacher.layouts.main')

@section('teacher-reviews-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 class="card-title">Student Reviews</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Course</th>
                                        <th>Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample Review Item -->
                                    <tr>
                                        <td>1</td>
                                        <td>Student A</td>
                                        <td>Mathematics</td>
                                        <td>
                                            <!-- Display review text or rating given by the student -->
                                            <p>The lecture was informative and engaging.</p>
                                        </td>
                                    </tr>
                                    <!-- More review rows can be added -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
