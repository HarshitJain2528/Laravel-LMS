<!-- resources/views/admin/assignment_report.blade.php -->

@extends('admin.layouts.main')

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
                                @if($assignmentData->isNotEmpty())
                                    @foreach($assignmentData as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning viewButton" data-student-id="{{ $item->id }}">View</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">No assignment details available for any student.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="viewModal" class="modal" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Student Assignment Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table" border="2" width="100%">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Submit Date</th>
                                <th>Marks Obtained</th>
                            </tr>
                        </thead>
                        <tbody id="courseDetailsBody">
                            <!-- Course details will be dynamically added here -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeBtn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery script for updating modal content -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.viewButton').on('click', function () {
                var studentId = $(this).data('student-id');
                var url = '{{ route("get-student-details", ["id" => "student_id"]) }}';

                $.ajax({
                    url: url.replace('student_id', studentId),
                    method: 'GET',
                    success: function (data) {
                        // console.log(data);

                        if (data.courseDetails && data.courseDetails.length > 0) {
                            var courseDetailsBody = $('#courseDetailsBody');
                            courseDetailsBody.empty();

                            $.each(data.courseDetails, function (index, assignment) {
                                courseDetailsBody.append(
                                    '<tr>' +
                                    '<td>' + assignment.course_name + '</td>' +
                                    '<td>' + assignment.created_at + '</td>' +
                                    '<td>' + assignment.obtained_marks + '</td>' +
                                    '</tr>'
                                );
                            });

                            // Set the student name in the modal title
                            $('#viewModalLabel').text('Student Assignment Details ');

                            // Show the modal
                            $('#viewModal').show();
                        } else {
                            console.error('Data not available.');
                        }
                    },
                    error: function (error) {
                        console.error('Error fetching data:', error);
                    }
                });
            });

            $('.closeBtn').on('click', function () {
                // Close the modal
                $('#viewModal').hide();
            });
        });
    </script>
@endsection
