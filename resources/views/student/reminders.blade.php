@include('student.layout.header')      
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center">
        <h1><strong>Reminders</strong></h1>
        <div class="pb-4 get"><strong class="text-white">Posted on May 22, 2020 &bullet; By Admin</strong></div>
      </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row divison">
            <div class="col-md-10 mx-auto divison">
                {{-- <content here> --}}
                    <div class="card">
                        <div class="card-header">
                            <h4>Message Notifications</h4>
                        </div>
                        <div class="card-body">
                            <!-- Example of a notification/message -->
                            <div class="notification">
                                <strong>Reminder:</strong> Your upcoming Math assignment is due tomorrow.
                                <span class="notification-time">Posted on 2024-01-14</span>
                            </div>
    
                            <!-- Example of another notification/message -->
                            <div class="notification">
                                <strong>Reminder:</strong> Physics quiz scheduled for next week.
                                <span class="notification-time">Posted on 2024-01-18</span>
                            </div>
                            <!-- Add more notifications/messages as needed -->
                        </div>
                </div>
@include('student.layout.footer')