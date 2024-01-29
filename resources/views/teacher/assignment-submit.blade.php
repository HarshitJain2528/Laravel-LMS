~@extends('teacher.layouts.main')
@section('teacher-assignment-submit-section')
    @include('teacher.layouts.sidebar')

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
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
                                    <button class="btn btn-primary openModalButton" data-assignment-id="{{ $assignment->id }}">Give Marks</button>
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
                                <!-- Your custom form content goes here -->
                                <!-- Example form -->
                                <form id="marksForm" method="post" action="{{url('/marks')}}">
                                    @csrf
                                    <label for="marks">Total Marks:</label>
                                    <input type="hidden" name="id" value="" readonly>
                                    <input type="text" id="marks" name="marks" value="" readonly>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.openModalButton').click(function () {
                var assignmentId = $(this).data('assignment-id');
                loadAssignmentData(assignmentId);
                $('#giveMarksCustomModal').fadeIn();
            });

            $('.closeCustomModal').click(function () {
                $('#giveMarksCustomModal').fadeOut();
            });

            $(window).click(function (e) {
                if ($(e.target).is('#giveMarksCustomModal')) {
                    $('#giveMarksCustomModal').fadeOut();
                }
            });

            function loadAssignmentData(assignmentId) {
                var url = '{{ route("assignment.details", ["id" => "aid"]) }}';
                $.ajax({
                    url:  url.replace('aid', assignmentId),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#marksForm input[name="id"]').val(data.assignmentDetails.id);
                        $('#marksForm input[name="obtained_marks"]').val(data.assignmentDetails.obtained_marks);
                        $('#marksForm input[name="marks"]').val(data.assignmentDetails.total_marks);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching assignment data:', error);
                    }
                });
            }
        });
    </script>


<style>
    .custom-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 5px;
        max-width: 400px;
        margin:auto;
        position: relative;
        top:20%;
        width: 100%;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        animation: fadeIn 0.3s ease-in-out;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .modal-header h5 {
        margin: 0;
    }

    .closeCustomModal {
        cursor: pointer;
        background: none;
        border: none;
        font-size: 20px;
        color: #333;
    }

    .modal-body {
    padding: 20px;
}

.modal-body label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.modal-body input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

.modal-body button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.modal-body button:hover {
    background-color: #45a049;
}


    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>
@endsection
