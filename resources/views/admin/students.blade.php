@extends('admin.layouts.main')

@section('admin-students-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Students</h2>
        <div class="card">
            <div class="card-body">
                <!-- Student Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Course Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->course}}</td>
                                <td>{{$student->email}}</td>
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
