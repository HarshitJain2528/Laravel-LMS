@include('student.layout.header')      
      
<div class="site-section-cover overlay" style="background-image: {{asset('student/images/hero_bg.jpg')}};">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1><strong >HTML - Description</strong></h1>
              {{-- <div class="pb-4 get"><strong class="text-white">Posted on May 22, 2020 &bullet; By Admin</strong></div> --}}
            </div>
          </div>
        </div>
      </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="heading">More Information</h2>
            <br>
            {{-- ifram videos --}}
            youtube video and notes in pdf
            {{-- notes link --}}
            <br>
            {{-- <a href="{{route('next')}}" class="btn btn-primary next"></a> --}}
        </div>
        
        </div>
      </div>
    </div>
    <hr>
    @include('student.layout.footer')