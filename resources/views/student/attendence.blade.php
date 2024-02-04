@extends('student.layout.main')

@section('student-attendence')

    <div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1><strong>Attendance</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading mb-4">
                        <h2>Attendance</h2>
                    </div>
                    <form method="post" action="{{route('Marks')}}" id="attendanceForm">
                        @csrf
                        You can Mark Attendance once in a day only.
                        <p>Mark attendance by clicking on the Mark Attendance button given below:</p>
                        <div class="form-group">
                            <input type="hidden" id="status" class="form-control" name="status" value="present" readonly>
                        </div>
                        <p id="markedTodayMessage" class="text-danger"></p>
                        <button type="button" class="btn btn-primary" id="markButton" data-check-url="{{ route('attendence.status') }}">Mark Attendance</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



