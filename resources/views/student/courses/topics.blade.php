@include('student.layout.header')      
      @foreach($courses as $title)     
      <div class="site-section-cover overlay" style="background-image: {{asset('student/images/hero_bg.jpg')}};">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1><strong >{{$title->course_title}}</strong></h1>
              {{-- <div class="pb-4 get"><strong class="text-white">Posted on May 22, 2020 &bullet; By Admin</strong></div> --}}
            </div>
            
          </div>
        </div>
      </div>
      @endforeach
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>ALL TOPICS</h2>
            {{-- List of HTML Topics --}}
            <ul class="list-group lists">
                <li class="list-group-item ">
                    <a href="{{route('desc')}}">Introduction to HTML</a>
                </li>
                <li class="list-group-item">
                    <a href="#">HTML Elements and Tags</a>
                </li>
                <li class="list-group-item">
                    <a href="#">HTML Attributes</a>
                </li>
                <li class="list-group-item">
                    <a href="#">HTML Forms</a>
                </li>
                <li class="list-group-item">
                  <a href="#">Introduction to HTML</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Elements and Tags</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Attributes</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Forms</a>
                </li>
                <li class="list-group-item">
                  <a href="#">Introduction to HTML</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Elements and Tags</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Attributes</a>
                </li>
                <li class="list-group-item">
                  <a href="#">HTML Forms</a>
                </li>
                {{-- Add more topics as needed --}}
            </ul>
        </div>
        
        </div>
      </div>
    </div>
    <hr>
    @include('student.layout.footer')