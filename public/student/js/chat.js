$(document).ready(function () {
    $('.teacher-item').click(function () {
        var teacherId = $(this).data('teacher-id');
        var senderName = $('.chat').data('sender-name');
        var getMessageRoute = $('.sendMessageForm').data('get-messages-route');

        $('.sendMessageForm').data('sender-name', senderName);

        $.ajax({
            url: getMessageRoute,
            type: 'GET',
            success: function (response) {
                if (response.messages.length > 0) {
                    $('#teacher' + teacherId + 'Messages').empty();
                    response.messages.forEach(function (message) {
                        displayMessage(message);
                    });
                }
            }
        });

        $('.chat').hide();
        $('#teacher' + teacherId + 'Chat').show();
        $('#teacher' + teacherId + 'Chat').find('.chat-input').show();
    });

    function displayMessage(message) {
        var senderName = message.sender_name;
        var receiverName = message.receiver_name;
        var receiverId = message.receiver_id;
        var senderId = message.sender_id;
        var messageContent = message.message_content;
        var messageHtml = '<div><strong>' + senderName + ':</strong> ' + messageContent + '</div>';
        $('#teacher' + senderId + 'Messages').append(messageHtml);
        $('#teacher' + receiverId + 'Messages').append(messageHtml);
    }

    $('.sendMessageForm').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var senderName = form.data('sender-name');
        var formData = form.serialize();

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    var receiverName = form.data('receiver-name');
                    var messageContent = form.find('.messageContent').val();
                    var teacherId = form.find('[name="receiver_id"]').val();
                    var messageHtml = '<div><strong>' + senderName + ':</strong> ' + messageContent + '</div>';
                    $('#teacher' + teacherId + 'Messages').append(messageHtml);
                    form.find('.messageContent').val('');
                }
            }
        });
    });
});
