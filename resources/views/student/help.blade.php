{{-- @extends('student.layout.main') --}}

{{-- @section('student-help') --}}
@include('student.layout.header')

<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Help </strong></h1>
            {{-- <div class="text-center">
                <img src="{{asset('student/images/profile.jpg')}}" alt="Logo" class="img-fluid rounded-circle" style="width: 150; height: 150;">
            </div> --}}
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
            <!-- Left sidebar with teacher list -->
            <div class="col-md-3">
                <div class="teacher-list">
                    <!-- Loop through teachers -->
                    @foreach($teachers as $teacher)
                        <div class="teacher-item" onclick="openChat('teacher{{ $teacher->id }}')">
                            {{ $teacher->name }}
                            <span class="arrow">&#10148;</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right section for chat -->
            <div class="col-md-9 right-section">
                <div id="chatWindow" class="chat-container">
                    <div id="defaultMessage" class="chat default-message">
                        Select a Teacher to start chatting.
                    </div>
                    <!-- Chat boxes for teachers -->
                    @foreach($teachers as $teacher)
                        <div class="chat" id="teacher{{ $teacher->id }}Chat">
                            <div class="chat-header">
                                {{ $teacher->name }}
                            </div>
                            <div class="chat-messages" id="teacher{{ $teacher->id }}Messages">
                                <!-- Chat messages will be loaded dynamically here -->
                            </div>
                            <!-- Chat input form -->
                            <form method="POST" class="sendMessageForm" action="{{ route('student.send.message') }}">
                                @csrf
                                <input type="hidden" name="receiver_id" value="{{ $teacher->id }}">
                                <div class="chat-input" id="chatInput">
                                    <textarea class="form-control messageContent" rows="2" placeholder="Type your message"></textarea>
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

<script>
    window.onload = function() {
        document.querySelectorAll('.chat').forEach(function(box) {
            box.style.display = 'none';
        });
        document.getElementById('defaultMessage').style.display = 'block';
    };

    // JavaScript function to handle chat opening
    function openChat(teacherId) {
        var chatBoxes = document.querySelectorAll('.chat');
        chatBoxes.forEach(function(box) {
            box.style.display = 'none';
        });

        document.getElementById('defaultMessage').style.display = 'none';

        var chatBox = document.getElementById(teacherId + 'Chat');
        chatBox.style.display = 'block';

        // Show chat input or any additional logic if needed
        var chatInput = document.getElementById('chatInput');
        chatInput.style.display = 'flex'; // Show the chat input
    }
</script>

<hr>
{{-- @endsection --}}
{{-- <script>
    document.getElementById('togglePasswordChange').addEventListener('click', function() {
        // Toggle visibility of the password change form
        var passwordChangeForm = document.getElementById('passwordChangeForm');
        passwordChangeForm.style.display = passwordChangeForm.style.display === 'none' ? 'block' : 'none';
    });
</script> --}}
