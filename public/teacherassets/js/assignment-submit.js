// teacher_assignment.js

$(document).ready(function () {
    $('.openModalButton').click(function () {
        var assignmentId = $(this).data('assignment-id');
        loadAssignmentData(assignmentId);
        $('#giveMarksCustomModal').fadeIn();
    });

    $('.closeCustomModal').click(function () {
        $('#giveMarksCustomModal').fadeOut();
    });

    $(window).click(function (e) {
        if ($(e.target).is('#giveMarksCustomModal')) {
            $('#giveMarksCustomModal').fadeOut();
        }
    });

    function loadAssignmentData(assignmentId) {
        // Read the data attribute values
        var routeUrl = $('.openModalButton').data('assignment-details-route').replace(':aid', assignmentId);

        $.ajax({
            url: routeUrl,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#marksForm input[name="id"]').val(data.assignmentDetails.id);
                $('#marksForm input[name="obtained_marks"]').val(data.assignmentDetails.obtained_marks);
                $('#marksForm input[name="marks"]').val(data.assignmentDetails.total_marks);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});
