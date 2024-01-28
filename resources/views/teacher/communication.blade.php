@extends('teacher.layouts.main')

@section('teacher-messages-section')
    @include('teacher.layouts.sidebar')

    <div class="container mt-4">
        <h2>Communication with Admins and Students</h2>
        <div class="row">
            <!-- Left sidebar with admin and student list -->
            <div class="col-md-3">
                <div class="user-list">
                    <!-- Loop through superadmins -->
                    @foreach($superAdmins as $superAdmin)
                        <div class="user-item" onclick="openChat('{{ $superAdmin->id }}', 'admin')">
                            <span>{{ $superAdmin->name }}</span>
                            <span class="arrow">&#10148;</span>
                        </div>
                    @endforeach

                    <!-- Loop through students -->
                    @foreach($students as $student)
                        <div class="user-item" onclick="openChat('{{ $student->id }}', 'student')">
                            <span>{{ $student->name }}</span>
                            <span class="arrow">&#10148;</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Right section for chat -->
            <div class="col-md-9 right-section">
                <div id="chatWindow" class="chat-container">
                    <div id="defaultMessage" class="chat default-message">
                        Select an Admin or Student to start chatting.
                    </div>
                    <!-- Chat boxes for superadmins and students -->
                    @foreach($superAdmins as $superAdmin)
                        @include('teacher.chat_box', ['user' => $superAdmin, 'type' => 'admin'])
                    @endforeach

                    @foreach($students as $student)
                        @include('teacher.chat_box', ['user' => $student, 'type' => 'student'])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
                        url: '{{ route('teacher.fetch.messages') }}',
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
</script>

@endsection
