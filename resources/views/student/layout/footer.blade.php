<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h2 class="footer-heading mb-4">About Us</h2>
          <p>The learning process is a beautiful journey. But like any adventure, it can have its stumbles. These quotes celebrate the power of education and remind us why it's worth the climb.</p>
          <ul class="list-unstyled social">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-instagram"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
          </ul>
        </div>
        <div class="col-lg-6 ml-auto">
          <div class="row">
            <div class="col-lg-4 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{url('attendence/'.auth()->user()->id)}}">Attendence</a></li>
                <li><a href="{{route('help')}}">Help Center</a></li>
                <li><a href="{{url('profile/'.auth()->user()->id)}}">My Profile</a></li>
              </ul>
            </div>
            <div class="col-lg-4 ml-auto">
              <h2 class="footer-heading mb-4">Connect with Us</h2>
              <form action="#">
                <div class="form-group">
                  <label for="email">Subscribe to our newsletter</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
</footer>
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
<script src="{{ asset('student/js/attendence.js') }}"></script>
<script src="{{ asset('student/js/chat.js') }}"></script>
<script src="{{ asset('student/js/setTimeout.js') }}"></script>
