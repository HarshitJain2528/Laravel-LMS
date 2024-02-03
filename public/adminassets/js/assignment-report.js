$(document).ready(function() {
    $('.viewButton').on('click', function() {
        var studentId = $(this).data('student-id');
        var url = $(this).data('ajax-url');

        $.ajax({
            url: url.replace('student_id', studentId), // Updated the URL replacement
            method: 'GET',
            success: function(data) {
                // Log the response for debugging
                console.log(data);

                if (data.courseDetails && data.courseDetails.length > 0) {
                    var courseDetailsBody = $('#courseDetailsBody');
                    courseDetailsBody.empty();

                    $.each(data.courseDetails, function(index, assignment) {
                        const submitDate = new Date(assignment.created_at);
                        const formattedDate = submitDate.toLocaleDateString();

                        courseDetailsBody.append(
                            '<tr>' +
                            '<td>' + assignment.course_name + '</td>' +
                            '<td>' + formattedDate + '</td>' +
                            '<td>' + assignment.obtained_marks + '</td>' +
                            '</tr>'
                        );
                    });

                    $('#viewModalLabel').text('Student Assignment Details');
                    $('#viewModal').show();
                } else {
                    alert('Assignment not submitted yet');
                }
            },
            error: function(error) {
                // Log the error for debugging
                console.error('Error fetching data:', error);
                alert('Error fetching data. Check the console for details.');
            }
        });
    });

    $('.closeBtn').on('click', function() {
        $('#viewModal').hide();
    });
});
