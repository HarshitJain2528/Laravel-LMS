@extends('admin.layouts.main')

@section('admin-teachers-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Teachers Details</h2>
        <div class="card">
            <div class="card-body">
                <!-- Teacher Table -->
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
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                            <!-- Add more rows for other teachers -->
                        </tbody>
                    </table>
                </div>

                <div class="custom-modal" id="teacherModel">
                    <div class="modal-content">
                      <span class="close">&times;</span>
                      <h2>Add Teacher</h2>
                      <!-- Your custom form content goes here -->
                      <form action="{{url('admin/add/teacher')}}" method="POST" id="courseForm">
                        @csrf
                        <div class="form-group">
                          <label for="teacherName">Teacher Name:</label>
                          <input type="text" class="form-control" id="teacherName" name="teacherName">
                        </div>
                        <div class="form-group">
                            <label for="teacherEmail">Teacher Email:</label>
                            <input type="email" class="form-control" id="teacherEmail" name="teacherEmail">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                          <label for="age">Teacher Phone:</label>
                          <input type="number" class="form-control" id="teacherPhone" name="teacherPhone">
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
          $("#addTeacherBtn").click(function(){
            $("#teacherModel").fadeIn();
          });

          // Close the modal when the close button is clicked
          $(".close").click(function(){
            $("#teacherModel").fadeOut();
          });

          // Close the modal if clicked outside of it
          $(window).click(function(event) {
            if (event.target == document.getElementById('teacherModel')) {
              $("#teacherModel").fadeOut();
            }
          });
        });
      </script>
@endsection
