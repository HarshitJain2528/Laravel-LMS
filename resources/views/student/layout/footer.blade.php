      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>The learning process is a beautiful thing, but, just like with any career, it can feel frustrating at times. This is why, returning to a few favorite education quotes that speak to learning’s purpose can be a helpful way to remind yourself and your students why education is important.</p>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
            <div class="col-lg-8 ml-auto">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{url('attendence/'.auth()->user()->id)}}">Attendence</a></li>
                    <li><a href="{{route('help')}}">Help</a></li>
                    <li><a href="{{url('profile/'.auth()->user()->id)}}">Profile</a></li>
                    <li><a href="{{route('courses')}}">Courses</a></li>
                    <li><a href="{{url('reviews/'.auth()->user()->id)}}">Reviews</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Resources</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{url('attendence/'.auth()->user()->id)}}">Attendence</a></li>
                    <li><a href="{{route('help')}}">Help</a></li>
                    <li><a href="{{url('profile/'.auth()->user()->id)}}">Profile</a></li>
                    <li><a href="{{route('courses')}}">Courses</a></li>
                    <li><a href="{{url('reviews/'.auth()->user()->id)}}">Reviews</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Support</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{url('attendence/'.auth()->user()->id)}}">Attendence</a></li>
                    <li><a href="{{route('help')}}">Help</a></li>
                    <li><a href="{{url('profile/'.auth()->user()->id)}}">Profile</a></li>
                    <li><a href="{{route('courses')}}">Courses</a></li>
                    <li><a href="{{url('reviews/'.auth()->user()->id)}}">Reviews</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="{{url('attendence/'.auth()->user()->id)}}">Attendence</a></li>
                    <li><a href="{{route('help')}}">Help</a></li>
                    <li><a href="{{url('profile/'.auth()->user()->id)}}">Profile</a></li>
                    <li><a href="{{route('courses')}}">Courses</a></li>
                    <li><a href="{{url('reviews/'.auth()->user()->id)}}">Reviews</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  
              </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="{{ asset('student/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('student/js/popper.min.js') }}"></script>
    <script src="{{ asset('student/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('student/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('student/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('student/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('student/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('student/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('student/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('student/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('student/js/aos.js') }}"></script>
    <script src="{{ asset('student/js/main.js') }}"></script>
  </body>
</html>

