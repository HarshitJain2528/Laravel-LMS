@extends('admin.layouts.main')

@section('admin-courses-section')
    @include('admin.layouts.sidebar')
    <style>
        /* Styling the select arrow */
        .custom-select::after {
            border-color: black; /* Color of the arrow */
        }
    </style>
    <div class="container mt-4 ml-4 p-0">
        <h2>Courses</h2>
        <div class="card">
            <div class="card-body">
                <!-- Courses Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Course Name</th>
                                <th>Course Code</th>
                                <th>Instructor</th>
                                <th>Students Enrolled</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->course_name}}</td>
                                <td>{{$course->course_code}}</td>
                                <td>{{$course->teacher->name}}</td>
                                <td>{{$course->students_enrolled}}</td>
                                <td>{{$course->duration}}</td>
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
                                    <!-- You can add other actions/buttons here -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button id="createCourseBtn" type="button" class="btn btn-primary mt-4 px-4 py-3 rounded-pill text-uppercase shadow-sm" >Create Course</button>
                <!-- Custom Modal -->
                <div class="custom-modal" id="courseModal">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <h2>Create Course</h2>
                      <!-- Your custom form content goes here -->
                      <form action="{{url('admin/create/course')}}" method="POST" id="courseForm">
                        @csrf
                        <div class="form-group">
                          <label for="courseName">Course Name:</label>
                          <input type="text" class="form-control" id="courseName" name="courseName">
                        </div>
                        <div class="form-group">
                            <label for="courseCode">Course Code:</label>
                            <input type="text" class="form-control" id="courseCode" name="courseCode">
                        </div>
                        <div class="form-group">
                            <label for="Teacher">Teacher:</label>
                            <select class="form-control  custom-select" id="teacher" name="teacher">
                                <option value="">Choose Teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                                {{-- <option value="">Teacher 2</option> --}}
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="courseDuration">Course Duration:</label>
                          <input type="text" class="form-control" id="courseDuration" name="courseDuration">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
          // On button click, show the modal
          $("#createCourseBtn").click(function(){
            $("#courseModal").fadeIn();
          });

          // Close the modal when the close button is clicked
          $(".close").click(function(){
            $("#courseModal").fadeOut();
          });

          // Close the modal if clicked outside of it
          $(window).click(function(event) {
            if (event.target == document.getElementById('courseModal')) {
              $("#courseModal").fadeOut();
            }
          });
        });
      </script>
@endsection
