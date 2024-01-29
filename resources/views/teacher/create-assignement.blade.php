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
