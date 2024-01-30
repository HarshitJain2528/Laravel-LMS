@extends('admin.layouts.main')

@push('title')
    Courses
@endpush

@section('admin-courses-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4 ml-4 p-0">
        @if(session('success'))
            <div class="alert alert-success" id="popup">
                {{ session('success') }}
            </div>
         @elseif(session('error'))
             <div class="alert alert-danger" id="popup">
                 {{ session('error') }}
             </div>
         @endif
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
                                <td>
                                    <a href="{{url('/admin/delete-course',$course->id)}}" class="btn btn-danger">Delete</a>
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


