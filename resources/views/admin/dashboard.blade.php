@extends('admin.layouts.main')

@push('title')
    Dashboard
@endpush

@section('admin-dashboard-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4 ml-4 p-0">
        <h2>Dashboard</h2>
        <div class="row">
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
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg rounded bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title text-center">Today's Present Students</h5>
                        <div class="text-center">
                            <h1 class="display-4"> <i class="bx bx-check"></i> {{ $presentCount }}</h1>
                            <a href="{{ Route('admin.attendence') }}" class="btn btn-sm btn-light mt-3">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-information p-4 mb-4 border rounded">
                <h3 class="mb-3">Student Recent Actitvities</h3>
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
                            @foreach ($totalStudents as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td class="current-course">
                                        @if (isset($studentActivities[$student->id]))
                                            {{ $studentActivities[$student->id]->course->course_title ?? 'N/A' }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td class="current-topic">
                                        @if (isset($studentActivities[$student->id]))
                                            {{ $studentActivities[$student->id]->topic->topic ?? 'N/A' }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
