$(document).ready(function () {
    function checkAttendanceStatus() {
        var checkUrl = $('#markButton').data('check-url');

        $.ajax({
            type: 'GET',
            url: checkUrl,
            success: function (response) {
                if (response.status === 'marked') {
                    $('#markButton').text('Marked').removeClass('btn-primary').addClass('btn-success').prop('disabled', true);

                    $('#markedTodayMessage').text('Attendance marked successfully.');
                } else {
                    var currentTime = new Date();
                    var hours = currentTime.getHours();
                    var dayOfWeek = currentTime.getDay();

                    if (hours >= 10 && hours < 17 && dayOfWeek !== 0 && dayOfWeek !== 6) {
                        $('#markButton').prop('disabled', false);
                    } else {
                        $('#markButton').prop('disabled', true);
                    }
                }
            },
        });
    }
    checkAttendanceStatus();

    $("#markButton").on("click", function () {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var dayOfWeek = currentTime.getDay();

        if (hours >= 10 && hours < 17 && dayOfWeek !== 0 && dayOfWeek !== 6) {
            $.ajax({
                type: 'POST',
                url: $('#attendanceForm').attr('action'),
                data: $('#attendanceForm').serialize(),
                success: function (response) {
                    if (response.status === 'success') {
                        checkAttendanceStatus();
                    } else {
                        $('#markedTodayMessage').text(response.message);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            $('#markedTodayMessage').text('You can only mark attendance between 10 am and 5 pm on weekdays.');
        }
    });
});
