@include('student.layout.header')
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
        {{-- <div class="container"> --}}
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
        {{-- </div> --}}
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
      
      <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center mb-5">
            <div class="heading">
              <span class="caption">Testimonials</span>
              <h2>Student Reviews</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!--1st review-->
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <h3 class="h5">Excellent Teacher!</h3>
              <div>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star-o text-warning"></span>
              </div>
              <blockquote class="mb-4">
                <p>Learning from Nishant Sir was a  great experience as I was a fresher and unfamiliar to this field. I gained a lot of  knowledge and many life lessons from sir which helped me to learn, grow and to work hard.
                  All Thanks To Nishant Sir .....</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="{{asset('student/images/person_1.jpg')}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Mike Fisher</span>
                  <span>Owner, Ford</span>
                </div>
              </div>
            </div>
          </div>
          <!--1st review ends here-->
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <h3 class="h5">Best Video Tutorial!</h3>
              <div>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star-o text-warning"></span>
              </div>
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="{{asset('student/images/person_2.jpg')}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Jean Stanley</span>
                  <span>Traveler</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <h3 class="h5">Easy to Understand!</h3>
              <div>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star-o text-warning"></span>
              </div>
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="{{asset('student/images/person_3.jpg')}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Katie Rose</span>
                  <span >Customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@include('student.layout.footer')