@extends('teacher.layouts.main')

@section('teacher-create-assignments-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Create Assignment Form -->
            <div class="create-assignment-form p-4 mb-4 border rounded">
                <h3 class="mb-3">Create Assignment</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="assignmentTitle" class="form-label">Assignment Title</label>
                        <input type="text" class="form-control" id="assignmentTitle" name="assignmentTitle" placeholder="Enter assignment title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" rows="4" placeholder="Enter assignment description">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Assignment Questions</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Questions here "></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dueDate" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="dueDate" name="dueDate">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" placeholder="Enter marks">
                    </div>
                   
                    <!-- Additional fields or options can be added as needed -->

                    <button type="submit" class="btn btn-primary">Create Assignment</button>
                </form>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title"><strong>Assignment: Math Homework</strong></h3>
                    <p class="card-text"><strong>Description:</strong> Solve the problems from chapter 5 and submit your solutions before the due date.</p>
                    <p class="card-text"><strong>Due Date:</strong> January 15, 2024</p>
                    <p class="card-text"><strong>Marks:</strong> 50</p>
                    <!-- Additional information about the assignment can be included here -->

                    <!-- Download Assignment Button -->
                    <div class="text-center mt-3">
                        <a href="{{ asset('storage/assignments/math_homework.pdf') }}" class="btn btn-primary" download>Download Assignment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
