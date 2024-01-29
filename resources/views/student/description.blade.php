@extends('student.layout.main')

@section('student-description')

    @foreach($data as $title) 
        <div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1><strong >{{$title->topic}}</strong></h1>
                    </div>
                </div>
            </div>        
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="heading">Topic Content</h2>
                        <br>
                        @php
                            $videoLinks = json_decode($title->video, true);
                        @endphp
                        @foreach ($videoLinks as $videoKey => $videoLink)
                            <iframe width="1000" height="500" src="{{$videoLink}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="margin:30px;"allowfullscreen ></iframe>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="{{url('next/'.$title->id)}}" class="btn btn-primary next">View Notes</a>            
        </div>
    @endforeach

@endsection
    
  