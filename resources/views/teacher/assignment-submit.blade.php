@extends('teacher.layouts.main')

@section('teacher-assignment-submit-section')

    @include('teacher.layouts.sidebar')

    @if(session('success'))
        <div class="alert alert-success" id="close">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger" id="close">
            {{ session('error') }}
        </div>
    @endif
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Student Assignments Table -->
            <div class="p-4 mb-4 border rounded">
                <h3 class="mb-3">Student Assignments</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Assignment Name</th>
                                <th>Course Name</th>
                                <th>Obtained Marks</th>
                                <th>Total Marks</th>
                                <th>PDF</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignments as $assignment)
                            <tr>
                                <td>{{ $assignment->student->name }}</td>
                                <td>{{ $assignment->assignment_name }}</td>
                                <td>{{ $assignment->course_name }}</td>
                                <td>{{ $assignment->obtained_marks }}</td>
                                <td>{{ $assignment->total_marks }}</td>
                                <td>
                                    @if($assignment->pdf)
                                        <a href="{{ asset($assignment->pdf) }}" target="_blank">View PDF</a>
                                    @else
                                        No PDF available
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-primary openModalButton" data-assignment-id="{{ $assignment->id }}" data-assignment-details-route="{{ route('assignment.details', ['id' => ':aid']) }}">Give Marks</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="custom-modal" id="giveMarksCustomModal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Give Marks</h5>
                                <button type="button" class="close closeCustomModal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="marksForm" method="post" action="{{url('/marks')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="" readonly>
                                    <label for="marks">Total Marks:</label>
                                    <input type="text" id="marks" name="marks" value="" readonly>
                                    <label for="obtained_marks">Obtained Marks:</label>
                                    <input type="text" id="marks" name="obtained_marks" value="">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
