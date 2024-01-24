@extends('student.layout.main')

@section('student-index')
        <div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1>Batch <strong>2023-2024</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light pb-0">
            <div class="row align-items-stretch overlap">
                <div class="col-lg-8 about">
                    <div class="box h-100 ">
                        <div class="d-flex align-items-center"> 
                            <div class="img"><img src="{{asset('student/images/img_1.jpg')}}" class="img-fluid" alt="Image"></div>
                            <div class="text">
                                <a href="#" class="category">About</a>
                                <h3><a href="#">INFORMATION TECNOLOGY</a></h3>
                                <p>Information Technology (IT) refers to the use, development, and management of computer systems,
                                software applications, networks, and other technologies for the purpose of storing, retrieving, 
                                transmitting, and manipulating data. IT is a broad field that encompasses a wide range of 
                                technologies and practices, and it plays a crucial role in various aspects of modern society.
                                </p>
                                <p class="meta">
                                <span class="mr-2 mb-2">May 10, 2023</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading mb-4">
                            <span class="caption">Available Courses</span>
                            <h2>Choose Course</h2>
                        </div>
                    </div>  
                </div>
                <div class="row align-items-stretch mb-4 ml-5">
                    @foreach($courses as $course)
                        <div class="col-lg-2" style="margin-bottom:20px;">
                            <a href="{{url('topics/'.$course->id)}}" class="course">
                                <img src="{{asset($course->logo)}}" style="height:4em;margin-bottom:20px;">
                                {{-- <span class="wrap-icon brand-adobeillustrator"></span> --}}
                                <h3>{{$course->course_title}}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row  ">
                    <div class="col-12">
                        <div class="heading mb-4">
                            <span class="caption">Latest</span>
                            <h2>Tutorials</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 tutorials">
                        @foreach($courses as $course)
                            <div class="d-flex tutorial-item mb-4 cards">
                                {{-- <div class="img-wrap">
                                <a href="#"><img src="{{asset($course->logo)}}" alt="Image" class="img-fluid"></a>
                                </div> --}}
                                <div>
                                    <h2><a href="#">{{$course->course_title}}</a></h2>
                                    <p>{{$course->course_description}}</p>
                                    <p class="meta">
                                        <span class="mr-1 mb-1">Duration : {{$course->course_duration}}</span>
                                    </p>
                                </div>
                                <div class="img-wrap">
                                    <a href="#"><img src="{{asset($course->logo)}}" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection