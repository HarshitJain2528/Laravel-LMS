window.onload = function () {
    document.querySelectorAll('.chat').forEach(function (box) {
        box.style.display = 'none';
    });
    document.getElementById('defaultMessage').style.display = 'block';
};

function openChat(userId, userType) {
    var fetchRoute = $('.user-list').data('fetch-messages-route');

    var chatBoxes = document.querySelectorAll('.chat');
    chatBoxes.forEach(function (box) {
        box.style.display = 'none';
    });

    document.getElementById('defaultMessage').style.display = 'none';

    var chatBox = document.getElementById(userType + userId + 'Chat');
    chatBox.style.display = 'block';

    var chatInput = chatBox.querySelector('.chat-input');
    chatInput.style.display = 'flex';

    $.ajax({
        type: 'GET',
        url: fetchRoute,
        data: { receiver_id: userId },
        success: function (messages) {
            $('#' + userType + userId + 'Messages').html(messages);
        },
        error: function (error) {
            console.error('Error fetching messages:', error);
        }
    });
}

$('.sendMessageForm').submit(function (e) {
    e.preventDefault();
    var sendRoute = $('.user-list').data('send-message-route');
    var fetchRoute = $('.user-list').data('fetch-messages-route');

    var formData = new FormData(this);

    if (!formData.has('message_content')) {
        formData.set('message_content', $(this).find('.messageContent').val());
    }

    $.ajax({
        type: 'POST',
        url: sendRoute,
        data: formData,
        processData: false,
        contentType: false,
        success: function (data) {
            if (data.success) {
                var userId = formData.get('receiver_id');
                var userType = userId.startsWith('admin') ? 'admin' : 'student';

                $.ajax({
                    type: 'GET',
                    url: fetchRoute,
                    data: { receiver_id: userId },
                    success: function (messages) {
                        $('#' + userType + userId + 'Messages').html(messages);
                        $('.chat-input textarea').val('');
                    },
                    error: function (error) {
                        console.error('Error fetching messages:', error);
                    }
                });
            }
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});
