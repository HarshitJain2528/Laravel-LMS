$(document).ready(function () {
    // Function to check attendance status on page load
    function checkAttendanceStatus() {
        var url = '{{ url("check-attendance-status"}}';
        $.ajax({
            type: 'GET',
            url: url,
            success: function (response) {
                if (response.status === 'marked') {
                    // Update button text and color
                    $('#markButton').text('Marked').removeClass('btn-primary').addClass('btn-success').prop('disabled', true);

                    // Display success message
                    $('#markedTodayMessage').text('Attendance marked successfully.');
                } else {
                    // Check if the current time is within the allowed time range (10 am to 5 pm)
                    var currentTime = new Date();
                    var hours = currentTime.getHours();

                    if (hours >= 10 && hours < 17) {
                        // Enable the button if the current time is within the allowed range
                        $('#markButton').prop('disabled', false);
                    } else {
                        // Disable the button if the current time is outside the allowed range
                        $('#markButton').prop('disabled', true);
                    }
                }
            },
        });
    }
    // Check attendance status on page load
    checkAttendanceStatus();
    // Attach click event to the Mark Attendance button
    $("#markButton").on("click", function () {
        var url = '{{ url("mark"}}';
        // Check if the current time is within the allowed time range (10 am to 5 pm)
        var currentTime = new Date();
        var hours = currentTime.getHours();
        if (hours >= 10 && hours < 17) {
            $.ajax({
                type: 'POST',
                url: url,
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
        } else {
            // Display a message if the user tries to mark attendance outside the allowed time range
            $('#markedTodayMessage').text('You can only mark attendance between 10 am and 5 pm.');
        }
    });
});