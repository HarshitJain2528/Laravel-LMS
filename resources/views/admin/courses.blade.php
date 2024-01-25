@extends('admin.layouts.main')

@push('title')
    Courses
@endpush

@section('admin-courses-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Courses</h2>
        <div class="card">
            <div class="card-body">
                <!-- Student Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->course_title}}</td>
                                <td>{{$course->course_duration}}</td>
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                            <!-- Add more rows for other students -->
                        </tbody>
                    </table>
                </div>
                <!-- Additional student-related content -->
            </div>
        </div>
    </div>

@endsection
