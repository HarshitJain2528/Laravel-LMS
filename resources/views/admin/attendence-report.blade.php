@extends('admin.layouts.main')

@push('title')
    Attendance Report
@endpush

@section('admin-attendence-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4 ml-4 p-0">
        <h2>Student Attendance</h2>
        <div class="mt-5 mb-3">
            <a href="{{ url('fetch-updated-data/1day') }}"><button class="btn btn-sm btn-primary" >T</button></a>
            <a href="{{ url('fetch-updated-data/1week') }}"><button class="btn btn-sm btn-primary" >1W</button></a>
            <a href="{{ url('fetch-updated-data/1month') }}"><button class="btn btn-sm btn-primary" >1M</button></a>
            <a href="{{ url('fetch-updated-data/6months') }}"><button class="btn btn-sm btn-primary" >6M</button></a>
        </div>
        <div class="card dashboard-card mt-2">
            <div class="card-body">
                <h5 class="card-title">Student Attendance Chart</h5>
                <canvas id="siteStatisticsChart" width="400" height="200" data-student-names="{{ json_encode($studentNames) }}"
                data-present-count="{{ json_encode($presentCount) }}"></canvas>
            </div>
        </div>
    </div>

@endsection
