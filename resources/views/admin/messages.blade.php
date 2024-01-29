@extends('admin.layouts.main')

@push('title')
    Messages
@endpush

@section('admin-messages-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4">
        <h2>Communication with Teachers</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="teacher-list">
                   @foreach($users as $user)
                   <div class="teacher-item" onclick="openChat('{{ $user->id }}')">
                       <a href="">{{ $user->name }}</a>
                       <span class="arrow">&#10148;</span>
                   </div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="chatWindow" class="chat-container">
                    <div id="defaultMessage" class="chat default-message">
                        Select a teacher to start chatting
                    </div>
                    @foreach($users as $user)
                        <div class="chat" id="teacher{{ $user->id }}Chat" style="display: none;">
                            <div class="chat-header">
                                {{ $user->name }}
                            </div>
                            <div class="chat-messages" id="teacher{{ $user->id }}Messages">
                                @foreach($messages[$user->id] ?? [] as $message)
                                    <p><strong>{{ $message->sender->name }}:</strong> {{ $message->message_content }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <form method="POST" action="{{ route('send.message') }}">
                        @csrf
                        <input type="hidden" name="receiver_id" value="{{ $user->id }}">
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

@endsection

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

            var chatBox = document.getElementById('teacher' + teacherId + 'Chat');
            chatBox.style.display = 'block';

            var chatInput = document.getElementById('chatInput');
            chatInput.style.display = 'flex'; 
        }

    </script>
