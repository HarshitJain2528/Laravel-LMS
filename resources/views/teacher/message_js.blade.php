<!-- teacher.message_js.blade.php -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    window.onload = function() {
        document.querySelectorAll('.chat').forEach(function(box) {
            box.style.display = 'none';
        });
        document.getElementById('defaultMessage').style.display = 'block';
    };

    // JavaScript function to handle chat opening
    function openChat(adminId) {
        var chatBoxes = document.querySelectorAll('.chat');
        chatBoxes.forEach(function(box) {
            box.style.display = 'none';
        });

        document.getElementById('defaultMessage').style.display = 'none';

        var chatBox = document.getElementById(adminId + 'Chat');
        chatBox.style.display = 'block';

        // Show chat input or any additional logic if needed
        var chatInput = chatBox.querySelector('.chat-input');
        chatInput.style.display = 'flex'; // Show the chat input
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
                    // Fetch updated messages for the specific super admin
                    var adminId = formData.get('receiver_id');
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('teacher.fetch.messages') }}',
                        data: { receiver_id: adminId },
                        success: function(messages) {
                            // Update the chat messages with new data
                            $('#admin' + adminId + 'Messages').html(messages);

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
</script>
