@extends('student.layout.main')

@section('student-help')

    <div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1><strong>Help </strong></h1>
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
                            <div class="teacher-item" onclick="openChat('teacher{{ $teacher->id }}')">
                                {{ $teacher->name }}
                                <span class="arrow">&#10148;</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9 right-section">
                    <div id="chatWindow" class="chat-container">
                        <div id="defaultMessage" class="chat default-message">
                            Select a Teacher to start chatting.
                        </div>
                        @foreach($teachers as $teacher)
                            <div class="chat" id="{{'teacher' . $teacher->id . 'Chat' }}">
                                <div class="chat-header">
                                    {{ $teacher->name }}
                                </div>
                                <div class="chat-messages" id="{{'teacher' . $teacher->id . 'Messages' }}">
                                </div>
                                <form method="POST" class="sendMessageForm" action="{{ route('student.send.message') }}">
                                    @csrf
                                    <input type="hidden" name="receiver_id" value="{{ $teacher->id }}">
                                    <div class="chat-input" id="chatInput">
                                        <textarea class="form-control messageContent"  rows="2" placeholder="Type your message"></textarea>
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
    
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        window.onload = function() {
            document.querySelectorAll('.chat').forEach(function(box) {
                box.style.display = 'none';
            });
            document.getElementById('defaultMessage').style.display = 'block';
        };

        function openChat(teacherId) {
            var chatBoxes = document.querySelectorAll('.chat');
            chatBoxes.forEach(function(box) {
                box.style.display = 'none';
            });

            document.getElementById('defaultMessage').style.display = 'none';

            // Remove 'teacher' prefix to get only the numeric part
            var numericTeacherId = teacherId.replace('teacher', '');

            var chatBox = document.getElementById(teacherId + 'Chat');
            chatBox.style.display = 'block';

            var chatInput = chatBox.querySelector('.chat-input');
            chatInput.style.display = 'flex';

            $.ajax({
                type: 'GET',
                url: '{{ route('student.fetch.messages') }}',
                data: { receiver_id: numericTeacherId },  // Use only the numeric part
                success: function(messages) {
                    $('#' + teacherId + 'Messages').html(messages);
                    var chatMessagesContainer = $('#' + teacherId + 'Messages');
                    chatMessagesContainer.scrollTop(chatMessagesContainer.prop('scrollHeight'));
                },
                error: function(error) {
                    console.error('Error fetching messages:', error);
                }
            });
        }

        $('.sendMessageForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            if (!formData.has('message_content')) {
                formData.set('message_content', $(this).find('.messageContent').val());
            }

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Message sent successfully:', response);

                    if (response.success) {
                        var teacherId = formData.get('receiver_id');

                        $.ajax({
                            type: 'GET',
                            url: '{{ route('student.fetch.messages') }}',
                            data: { receiver_id: teacherId },
                            success: function(response) {
                                console.log('Messages fetched successfully:', response);

                                // Update the chat messages with new data
                                $('#' + teacherId + 'Messages').html(response);

                                // Scroll to the bottom to show the new message
                                var chatMessagesContainer = $('#' + teacherId + 'Messages');
                                chatMessagesContainer.scrollTop(chatMessagesContainer.prop('scrollHeight'));

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
                    console.error('Error sending message:', error);
                }
            });
        });
    </script>