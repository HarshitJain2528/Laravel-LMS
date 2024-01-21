@extends('student.layout.main')

@section('student-courses')
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1><strong>Courses</strong></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row  ">
            <div class="col-12">
              <div class="heading mb-4">
                <span class="caption">ALL</span>
                <h2>Tutorials</h2>
              </div>
            </div>
            <div class="col-lg-8 tutorials">
              @foreach($courses as $course)
              <div class="d-flex tutorial-item mb-4 cards">
                <div class="img-wrap">
                  <a href="#"><img src="{{asset($course->logo)}}" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <h3><a href="#">{{$course->course_title}}</a></h3>
                  <p>{{$course->course_description}}</p>
                  <p class="meta">
                    <span class="mr-2 mb-2">Duration : {{$course->course_duration}}</span>
                  </p>
                  <p><a href="{{url('topics/'.$course->id)}}" class="btn btn-primary custom-btn">View</a></p>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
@endsection