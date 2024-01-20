@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Attendance</strong></h1>
        </div>
    </div>
</div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-4">
                    <h2>Attendance</h2>
                </div>

                {{-- Display success or error messages --}}
                {{-- @if(session('message')) --}}
                    {{-- <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}
                
                {{-- Display the form to mark attendance --}}
                <form method="post" action="{{route('Mark')}}" id="attendanceForm">
                    @csrf
                    You can Mark Attendence once in a day only .
                    <p > Mark attendance by clicking on mark attendence button given below :
                    <div class="form-group">
                        <input type="text" id="status" class="form-control" name=" status" value="present" readonly>
                    </div>

                    <!-- Check if attendance is already marked for today -->
                    <p id="markedTodayMessage" class="text-danger"></p>

                    <button type="submit" onclick="markAttendance()" class="btn btn-primary" id="markButton">Mark Attendance</button>
                </form>
            </div>
        </div>
    </div>
</div>

<hr>
@include('student.layout.footer')
<script>
    function markAttendance() {
        var form = document.getElementById('attendanceForm');
        var button = document.getElementById('markButton');

        // Check if the form is already submitted
        if (form.getAttribute('data-submitted') === 'true') {
            alert('Attendance already marked. Please try again tomorrow.');
            return false;
        }

        // Disable the submit button
        button.disabled = true;

        // Change the value of the submit button
        button.innerHTML = 'Marked';

        // Change the secondary color of the button
        button.classList.remove('btn-primary');
        button.classList.add('btn-secondary');

        // Set a flag to prevent double submission
        form.setAttribute('data-submitted', 'true');

        // Optionally, you can submit the form programmatically if needed
        form.submit();
    }
</script>