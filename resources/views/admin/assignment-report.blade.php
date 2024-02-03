@extends('admin.layouts.main')

@push('title')
    Assignment Report
@endpush

@section('admin-assignment-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4 ml-4 p-0">
        <h2>Assignment Report</h2>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($assignmentData->isNotEmpty())
                                    @foreach ($assignmentData as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-warning viewButton"
                                                    data-student-id="{{ $item->id }}"  data-ajax-url="{{ url('get-assignment-details', ['id' => 'student_id']) }}">View</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="viewModal" class="modal" style="display: none;" role="dialog" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:130%">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Student Assignment Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table" border="2">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Submit Date</th>
                                <th>Marks Obtained</th>
                            </tr>
                        </thead>
                        <tbody id="courseDetailsBody">
                            <!-- Course details will be dynamically added here through ajax-->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeBtn">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection
