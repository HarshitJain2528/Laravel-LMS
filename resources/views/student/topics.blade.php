@extends('student.layout.main')
@section('student-topics')

<div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');"> 
  @foreach($courses as $title) 
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center">
        <h1><strong >{{$title->course_title}}</strong></h1>
      </div>
      
    </div>
  </div>
  @endforeach
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1><b>ALL TOPICS</b></h1>
        {{-- List of HTML Topics --}}
        @foreach($topics as $topic)
        <ul class="list-group lists">
            <li class="list-group-item">
                <a href="{{url('desc/'.$topic->id)}}">{{$topic->topic}}</a>
            </li>
            {{-- Add more topics as needed --}}
        </ul>
        @endforeach
        <br>
        <h1><b>ASSIGNMENTS</b></h1>
        @foreach($assignment as $assign)
        <ul class="list-group lists">
            <li class="list-group-item ">
                <a href="{{url('assignment/'.$assign->id)}}">{{$assign->assignment_title}}</a>
            </li>
        </ul>
        @endforeach
    </div>
    </div>
  </div>
</div>
<hr>
@endsection