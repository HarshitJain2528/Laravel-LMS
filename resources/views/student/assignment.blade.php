@extends('student.layout.main')

@section('student-assignment')

    @foreach ($assignment as $title)
        <div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1><strong>{{ $title->assignment_title }}</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="border:1px solid black;padding:40px">
                        <h1 class="heading" style="text-align: center;border-bottom:none">Assignment</h1>
                        <p style="text-align: right;">Total Marks: <span id="totalMarks">{{ $title->total_marks }}</span>
                        </p>
                        <div class="instructions">
                            <h3>Instructions:</h3>
                            <ul>
                                <li>All questions are compulsory.</li>
                                <li>Submit your assignment in pdf form of output only.</li>
                                <li>Marks will be given by teacher after submission.</li>
                            </ul>
                        </div>
                        <div class="content-area">
                            <h3>Question : </h3>
                            @php
                                $questions = json_decode($title->assignment_question, true);
                            @endphp
                            @foreach ($questions as $questionKey => $question)
                                <p>Q: {{ $question }}</p>
                            @endforeach
                        </div>
                        <div class="submit-button" style="float:right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#submitModal">Submit
                                Assignment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="submitModalLabel">Submit Assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('submitAssignment') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="assignmentName">Name : </label>
                            <input type="text" class="form-control" id="assignmentName" name="assignmentName"
                                value="{{ $title->assignment_title }}" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="assignmentId" name="assignmentId"
                                value="{{ $title->id }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="course">Course</label>
                            <input type="text" class="form-control" id="course" name="course"
                                value="{{ $title->course->course_title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="totalmarks">Total Marks : </label>
                            <input type="text" class="form-control" id="totalmarks" name="totalmarks"
                                value="{{ $title->total_marks }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fileUpload">File Upload</label>
                            <input type="file" class="form-control-file" id="fileUpload" name="fileUpload" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
