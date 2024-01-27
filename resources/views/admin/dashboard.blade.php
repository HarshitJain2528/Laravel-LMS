@extends('admin.layouts.main')

@push('title')
    Dashboard
@endpush

@section('admin-dashboard-section')
  @include('admin.layouts.sidebar')

  <div class="container mt-4 ml-4 p-0">
    <h2>Dashboard</h2>
    <div class="row">

      <!-- Total Students Section -->
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

      <!-- Today's Present Students Section -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-lg rounded bg-success text-white">
          <div class="card-body">
            <h5 class="card-title text-center">Today's Present Students</h5>
            <div class="text-center">
              <h1 class="display-4"> <i class="bx bx-check"></i> {{$presentCount}}</h1>
              <a href="{{ Route('admin.attendence') }}" class="btn btn-sm btn-light mt-3">More Info</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

@endsection
