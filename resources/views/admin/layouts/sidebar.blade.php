<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img">
       <a href="{{ route('admin.profile') }}"> <img src="{{ asset('adminassets/images/m1.jpg') }}" alt="" ></a>
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">LMS</span> </a>
            <div class="nav_list">
                <a href="{{route('dashboard')}}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="{{route('student.table')}}" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Students</span> </a>
                <a href="{{route('teacher.table')}}" class="nav_link"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Teachers</span> </a>
                <a href="{{route('attendence')}}" class="nav_link"> <i class='bx bx-calendar-check nav_icon'></i> <span class="nav_name">Attendence Report</span> </a>
                <a href="{{route('assignment')}}" class="nav_link"> <i class='bx bx-file nav_icon'></i> <span class="nav_name">Assignment Score</span> </a>
                <a href="{{route('chat.show')}}" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
            </div>
        <a href="{{url('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>
