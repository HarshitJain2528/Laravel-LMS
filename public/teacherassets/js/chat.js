window.onload = function() {
    document.querySelectorAll('.chat').forEach(function(box) {
        box.style.display = 'none';
    });
    document.getElementById('defaultMessage').style.display = 'block';
};

// JavaScript function to handle chat opening
function openChat(userId, userType) {
    var chatBoxes = document.querySelectorAll('.chat');
    chatBoxes.forEach(function(box) {
        box.style.display = 'none';
    });

    document.getElementById('defaultMessage').style.display = 'none';

    var chatBox = document.getElementById(userType + userId + 'Chat');
    chatBox.style.display = 'block';

    // Show chat input or any additional logic if needed
    var chatInput = chatBox.querySelector('.chat-input');
    chatInput.style.display = 'flex'; // Show the chat input

    // Fetch and load previous messages for the specific user
    $.ajax({
        type: 'GET',
        url: '{{ route('teacher.fetch.messages') }}',
        data: { receiver_id: userId },
        success: function(messages) {
            // Update the chat messages with existing data
            $('#' + userType + userId + 'Messages').html(messages);
        },
        error: function(error) {
            console.error('Error fetching messages:', error);
        }
    });
}

$('.sendMessageForm').submit(function(e) {
    e.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Make sure 'message_content' is properly set
    if (!formData.has('message_content')) {
        formData.set('message_content', $(this).find('.messageContent').val());
    }

    // Send AJAX request
    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if (data.success) {
                // Fetch updated messages for the specific user
                var userId = formData.get('receiver_id');
                var userType = userId.startsWith('admin') ? 'admin' : 'student';

                $.ajax({
                    type: 'GET',
                    url: route('teacher.fetch.messages'),
                    data: { receiver_id: userId },
                    success: function(messages) {
                        // Update the chat messages with new data
                        $('#' + userType + userId + 'Messages').html(messages);

                        // Clear textarea after successful message submission
                        $('.chat-input textarea').val('');
                    },
                    error: function(error) {
                        console.error('Error fetching messages:', error);
                    }
                });
            }
        },
        error: function(error) {
            // Handle error, if any
            console.error('Error:', error);
        }
    });
});
