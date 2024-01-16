@extends('teacher.layouts.main')

@section('teacher-messages-section')
    @include('teacher.layouts.sidebar')

    <div class="container mt-4">
        <h2>Communication with Super Admin</h2>
        <div class="row">
            <!-- Left sidebar with super admin list -->
            <div class="col-md-3">
                <div class="admin-list">
                    <!-- Loop through super admins -->
                    @foreach($superAdmins as $superAdmin)
                        <div class="admin-item" onclick="openChat('admin{{ $superAdmin->id }}')">
                            {{ $superAdmin->name }}
                            <span class="arrow">&#10148;</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Right section for chat -->
            <div class="col-md-9 right-section">
                <div id="chatWindow" class="chat-container">
                    <div id="defaultMessage" class="chat default-message">
                       Chat with superadmin
                    </div>
                    <!-- Chat boxes for super admins -->
                    @foreach($superAdmins as $superAdmin)
                        <div class="chat" id="admin{{ $superAdmin->id }}Chat">
                            <div class="chat-header">
                                {{ $superAdmin->name }}
                            </div>
                            <div class="chat-messages" id="admin{{ $superAdmin->id }}Messages">
                                <!-- Chat messages for each super admin -->
                                @foreach($messages[$superAdmin->id] ?? [] as $message)
                                    <p><strong>{{ $message->sender->name }}:</strong> {{ $message->message_content }}</p>
                                @endforeach
                            </div>
                            <!-- Chat input form can be added here if needed -->
                            <!-- Your Blade file with form and textarea -->
                        </div>
                        <form method="POST" id="sendMessageForm" action="">
                            @csrf
                            <input type="hidden" name="receiver_id" value="{{ $superAdmin->id }}">
                            <div class="chat-input" id="chatInput">
                                <textarea id="messageContent" name="message_content" class="form-control" rows="2" placeholder="Type your message"></textarea>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
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
        function openChat(adminId) {
            var chatBoxes = document.querySelectorAll('.chat');
            chatBoxes.forEach(function(box) {
                box.style.display = 'none';
            });

            document.getElementById('defaultMessage').style.display = 'none';

            var chatBox = document.getElementById(adminId + 'Chat');
            chatBox.style.display = 'block';

            // Show chat input or any additional logic if needed
            var chatInput = document.getElementById('chatInput');
            chatInput.style.display = 'flex'; // Show the chat input
        }

        $('#sendMessageForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Get form data
            let formData = new FormData(this);

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('teacher.send.message') }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    // Handle response, if needed
                    console.log(data);
                    // Clear textarea after successful message submission
                    $('#messageContent').val('');
                },
                error: function(error) {
                    // Handle error, if any
                    console.error('Error:', error);
                }
            });
        });
    </script>
@endsection
