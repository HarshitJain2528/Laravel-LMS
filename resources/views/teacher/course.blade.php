@extends('teacher.layouts.main')

@section('teacher-course-section')
    @include('teacher.layouts.sidebar')
    <div class="container mt-4">
        <div class="row">
            @foreach ($courses as $course)

            <div class="col-md-12">
                <div class="d-flex tutorial-item mb-4 cards">
                    <div class="img-wrap">
                        <a href="#"><img src="{{asset($course->logo)}}" style="font-size: 13em;" class="img-fluid"></i></a>
                    </div>
                    <div>
                        <h3><a href="#">{{$course->course_title}}</a></h3>
                        <p>{{$course->course_description}}</p>

                        <p class="meta">
                            <span class="mr-2 mb-2">Course Duration : {{$course->course_duration}}</span>
                        </p>

                        <p><a href="{{url('/teacher/course/topics/'.$course->id)}}" class="btn btn-primary custom-btn">View</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection
