@extends('student.layout.main')
    @section('student-help')
        <div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1><strong>Help</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading mb-4">
                            <h2>Messages</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="teacher-list">
                            @foreach($teachers as $teacher)
                                <div class="teacher-item" data-teacher-id="{{ $teacher->id }}">
                                    {{ $teacher->name }}
                                    <span class="arrow">&#10148;</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-9 right-section">
                        <div id="chatWindow" class="chat-container">
                            @foreach($teachers as $teacher)
                                <div class="chat" id="{{ 'teacher' . $teacher->id . 'Chat' }}">
                                    <div class="chat-header">
                                        {{ $teacher->name }}
                                    </div>
                                    <div class="chat-messages" id="{{ 'teacher' . $teacher->id . 'Messages' }}">
                                        <!-- Previous messages will be appended here via jQuery -->
                                    </div>
                                    <form method="POST" class="sendMessageForm" action="{{ route('student.send.message') }}">
                                        @csrf
                                        <input type="hidden" name="receiver_id" value="{{ $teacher->id }}">
                                        <div class="chat-input" id="chatInput">
                                            <textarea class="form-control messageContent" rows="2" name="messageContent" placeholder="Type your message"></textarea>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.teacher-item').click(function () {
                var teacherId = $(this).data('teacher-id');
                var senderName = '{{ auth()->user()->name }}'; // Get the sender name from the backend

                // Set sender name in the form's data attribute
                $('.sendMessageForm').data('sender-name', senderName);

                // AJAX request to get previous messages
                $.ajax({
                    url: '{{ route("student.get.messages", ":teacherId") }}'.replace(':teacherId', teacherId),
                    type: 'GET',
                    success: function (response) {
                        if (response.messages.length > 0) {
                            $('#teacher' + teacherId + 'Messages').empty();
                            response.messages.forEach(function (message) {
                                displayMessage(message);
                            });
                        } else {
                            $('#teacher' + teacherId + 'Messages').html('No messages yet.');
                        }
                    }
                });

                // Open chat window
                $('.chat').hide();
                $('#teacher' + teacherId + 'Chat').show();
                $('#teacher' + teacherId + 'Chat').find('.chat-input').show();
            });

            // Function to display a message with sender and receiver names
            function displayMessage(message) {
                var senderName = message.sender_name;
                var receiverName = message.receiver_name;
                var messageContent = message.message_content;
                var messageHtml = '<div><strong>' + senderName + ':</strong> ' + messageContent + '</div>';
                $('#teacher' + message.receiver_id + 'Messages').append(messageHtml);
            }

            // Submit message form
            $('.sendMessageForm').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                var senderName = form.data('sender-name'); // Retrieve sender name from form data
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


    </script>
@endsection
