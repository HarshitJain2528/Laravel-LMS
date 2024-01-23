<!doctype html>
<html lang="en">
  <head>
    <title>LMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xrR9e7MlfBzR7JO93tmzZihbYJfNQb6K+A9V5CzoK7m" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('student/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('student/fonts/brand/style.css')}}">
    <link rel="stylesheet" href="{{asset('student/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('student/css/bootstrap-datepicker')}}.css">
    <link rel="stylesheet" href="{{asset('student/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('student/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('student/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('student/css/aos.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('student/css/style.css')}}">
    <!-- PDF.js library -->
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
  </head>
  <body>
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
        <div class="site-mobile-menu-body"></div>
    </div>
       <!-- Your header with Settings dropdown -->
    <header class="site-navbar light site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <a href="index.html"><strong>LMS</strong></a>
                </div>
            </div>
            <div class="col-9 text-right">
                <span class="d-inline-block d-lg-none">
                    <a href="#" class="site-menu-toggle js-menu-toggle py-5 ">
                        <span class="icon-menu h3 text-black"></span>
                    </a>
                </span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li><a href="{{route('index')}}" class="nav-link">Home</a></li>
                        <li><a href="{{route('courses')}}" class="nav-link">Courses</a></li>
                        <li><a href="{{url('attendence/'.auth()->user()->id)}}" class="nav-link">Attendence</a></li>
                        <li><a href="{{url('reviews/'.auth()->user()->id)}}" class="nav-link">Reviews</a></li>
                        <!-- Add the Settings dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cogs"></i> Settings
                            </a>
                            <div class="dropdown-menu text-black" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-black" href="{{url('profile/'.auth()->user()->id)}}">Profile</a>
                                <a class="dropdown-item text-black" href="{{route('help')}}">Help</a>
                                <div class="dropdown-divider text-black"></div>
                                <a class="dropdown-item text-black"  href="{{url('logout')}}">Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>