@extends('admin.layouts.main')

@push('title')
    Teachers
@endpush

@section('admin-teachers-section')
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
        <h2>Teachers Details</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Teacher Name</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->phone}}</td>
                                <td>
                                  <a href="{{url('/admin/delete-teacher',$teacher->id)}}" class="btn btn-danger">Delete</a>
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
 