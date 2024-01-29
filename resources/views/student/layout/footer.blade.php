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
  