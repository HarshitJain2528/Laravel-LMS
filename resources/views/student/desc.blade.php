@include('student.layout.header')      
{{-- <div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> --}}
       @foreach($data as $title) 
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1><strong >{{$title->topic}}</strong></h1>
              {{-- <div class="pb-4 get"><strong class="text-white">Posted on May 22, 2020 &bullet; By Admin</strong></div> --}}
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
            {{-- <a href ="{{route('next')}}" class="btn btn-primary next">-- NEXT --</a> --}}
            {{-- <h2 class="heading">Topic Notes</h2>
            <!-- Card format for PDF -->
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PDF Document</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="{{ asset('teacherassets/notes/1705423823.pdf') }}" allowfullscreen></iframe>
                    </div>
                </div>
              </div>
               --}}
          </div>
        </div>
      </div>
      <a href="{{route('next')}}" class="btn btn-primary next">NEXT</a>
    </div>
    @endforeach
      
    <hr>
    @include('student.layout.footer')