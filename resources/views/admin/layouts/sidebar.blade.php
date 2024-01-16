<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img">
        <img src="https://i.imgur.com/hczKIze.jpg" alt="" >
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">LMS</span> </a>
            <div class="nav_list">
                <a href="{{url('/admin/dashboard')}}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="{{url('/admin/students')}}" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Students</span> </a>
                <a href="{{url('/admin/teachers')}}" class="nav_link"> <i class='bx bx-chalkboard nav_icon'></i> <span class="nav_name">Teachers</span> </a>
                <a href="{{url('/admin/classes')}}" class="nav_link"> <i class='bx bx-book nav_icon'></i> <span class="nav_name">Classes</span> </a>
                <a href="{{url('/admin/courses')}}" class="nav_link"> <i class='bx bx-book-content nav_icon'></i> <span class="nav_name">Courses</span> </a>
                <a href="{{url('/admin/messages')}}" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                <a href="{{url('/admin/reports')}}" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Reports</span> </a> </div>
            </div>
        <a href="{{url('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>
