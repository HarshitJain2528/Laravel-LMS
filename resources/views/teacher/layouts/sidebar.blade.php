<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">LMS  Teacher</span> </a>
            <div class="nav_list">
                <a href="{{url('/teacher/course')}}" class="nav_link"> <i class='bx bx-book-open nav_icon'></i> <span class="nav_name">Courses</span> </a>
                <a href="{{url('/teacher/create/courses')}}" class="nav_link active"> <i  class='bx bx-plus-circle nav_icon'></i> <span class="nav_name">Create Course</span> </a>
                <a href="{{url('/teacher/create/topic')}}" class="nav_link active"> <i class='bx bx-book-add nav_icon'></i> <span class="nav_name">Topic Create</span> </a>
                <a href="{{url('/teacher/create/assignments')}}" class="nav_link"> <i class='bx bx-task nav_icon'></i> <span class="nav_name">Create Assignment </span> </a>
                <a href="{{url('/teacher/student')}}" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Students </span> </a>
                <a href="{{url('/teacher/attendence')}}" class="nav_link"> <i class='bx bx-check-double nav_icon'></i> <span class="nav_name">Attendence</span> </a>
                <a href="{{url('teacher/reviews')}}" class="nav_link"> <i class='bx bx-note nav_icon'></i> <span class="nav_name">Reviews</span> </a>
                <a href="{{url('/teacher/messages')}}" class="nav_link"> <i class='bx bx-chat nav_icon'></i> <span class="nav_name">Messages</span> </a>
            </div>
        </div>
        <a href="{{url('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>
