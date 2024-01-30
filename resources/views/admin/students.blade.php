@extends('admin.layouts.main')

@push('title')
    Students
@endpush

@section('admin-students-section')
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
        <h2>Students</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>
                                    <a href="{{url('/admin/delete-student',$student->id)}}" class="btn btn-danger">Delete</a>
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
