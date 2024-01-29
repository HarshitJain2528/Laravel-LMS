    $(document).ready(function () {
        $('.viewButton').on('click', function () {
            var studentId = $(this).data('student-id');
            var url = '{{ url("get-assignment-details", ["id" => "student_id"]) }}';// Construct the URL for the AJAX request using the Laravel route function

            $.ajax({
                url: url.replace('student_id', studentId),
                method: 'GET',
                success: function (data) {
                    // console.log(data);

                    if (data.courseDetails && data.courseDetails.length > 0)//to check whether the data.courseDetails array exists and has at least one element
                    {   //.length used with an array, it returns the number of elements in that array.
                        var courseDetailsBody = $('#courseDetailsBody');
                        courseDetailsBody.empty();

                        $.each(data.courseDetails, function (index, assignment) {
                        const submitDate = new Date(assignment.created_at);
                        const formattedDate = submitDate.toLocaleDateString();

                        courseDetailsBody.append(
                            '<tr>' +
                            '<td>' + assignment.course_name + '</td>' +
                            '<td>' + formattedDate + '</td>' + // Display only the date portion
                            '<td>' + assignment.obtained_marks + '</td>' +
                            '</tr>'
                        );
                    });

                        // Set the student name in the modal title
                        $('#viewModalLabel').text('Student Assignment Details ');

                        // Show the modal
                        $('#viewModal').show();
                    } else {
                        alert('Assignment not submitted yet');
                    }
                },
                error: function (error) {
                    alert('Error fetching data:', error);
                }
            });
        });

        $('.closeBtn').on('click', function () {
            // Close the modal
            $('#viewModal').hide();
        });
    });

