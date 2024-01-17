@extends('teacher.layouts.main')

@section('teacher-create-assignments-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
            <!-- Create Assignment Form -->
            <div class="create-assignment-form p-4 mb-4 border rounded">
                <h3 class="mb-3">Create Assignment</h3>
                <form action="{{route('create.assignment')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="course" class="form-label">Select Course</label>
                        <select type="text" class="form-control" id="topicTitle" name="course">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="assignmentTitle" class="form-label">Assignment Title</label>
                        <input type="text" class="form-control" id="assignmentTitle" name="assignment_title" placeholder="Enter assignment title">
                    </div>
                    <div class="mb-3" id="questionContainer">
                        <label for="assignment_questions" class="form-label">Assignment Questions</label>
                        <div class="question-inputs">
                            <input type="text" class="form-control" id="description" name="assignment_question[]" rows="4" placeholder="Enter question 1">
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addQuestions()">Add Another Question</button>

                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="assignment_marks" placeholder="Enter marks">
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
    <script>
        function addQuestions() {
            var container = document.getElementById('questionContainer');
            var inputContainer = container.querySelector('.question-inputs');
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.className = 'form-control';
            newInput.name = 'assignment_question[]';
            newInput.placeholder = 'Enter question ' + (inputContainer.children.length + 1);
            inputContainer.appendChild(newInput);
        }
    </script>
@endsection
