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
                {{-- @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}

                {{-- Display the form to mark attendance --}}
                <form method="post" action="{{ route('Mark') }}" id="attendanceForm">
                    @csrf
                    You can Mark Attendance once in a day only.
                    <p>Mark attendance by clicking on the Mark Attendance button given below:</p>
                    <div class="form-group">
                        <input type="text" id="status" class="form-control" name="status" value="present" readonly>
                    </div>

                    <!-- Check if attendance is already marked for today -->
                    <p id="markedTodayMessage" class="text-danger"></p>

                    <button type="button" class="btn btn-primary" id="markButton">Mark Attendance</button>
                </form>
            </div>
        </div>
    </div>
</div>

<hr>
@include('student.layout.footer')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- ... your previous HTML code ... -->

<script>
    $(document).ready(function () {
        // Function to check attendance status on page load
        function checkAttendanceStatus() {
            $.ajax({
                type: 'GET',
                url: '{{ route('CheckAttendanceStatus') }}',
                success: function (response) {
                    if (response.status === 'marked') {
                        // Update button text and color
                        $('#markButton').text('Marked').removeClass('btn-primary').addClass('btn-success').prop('disabled', true);

                        // Display success message
                        $('#markedTodayMessage').text('Attendance marked successfully.');

                        // Set a timeout to reset button after 24 hours
                        setTimeout(function () {
                            $('#markButton').text('Mark Attendance').removeClass('btn-success').addClass('btn-primary').prop('disabled', false);
                            $('#markedTodayMessage').text('');
                        }, 24 * 60 * 60 * 1000); // 24 hours in milliseconds
                    }
                },
            });
        }

        // Check attendance status on page load
        checkAttendanceStatus();

        // Attach click event to the Mark Attendance button
        $("#markButton").on("click", function () {
            $.ajax({
                type: 'POST',
                url: '{{ route('Mark') }}',
                data: $('#attendanceForm').serialize(),
                success: function (response) {
                    if (response.status === 'success') {
                        // Check attendance status after marking attendance
                        checkAttendanceStatus();
                    } else {
                        // Display error message
                        $('#markedTodayMessage').text(response.message);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    });
</script>
