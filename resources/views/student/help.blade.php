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
                                <div class="chat" id="{{ 'teacher' . $teacher->id . 'Chat' }}" data-sender-name="{{ auth()->user()->name }}">
                                    <div class="chat-header">
                                        {{ $teacher->name }}
                                    </div>
                                    <div class="chat-messages" id="{{ 'teacher' . $teacher->id . 'Messages' }}">
                                        <!-- Previous messages will be appended here via jQuery -->
                                    </div>
                                    <form method="POST" class="sendMessageForm" action="{{ route('student.send.message') }}" data-get-messages-route="{{ route('student.get.messages', ['teacherId' => $teacher->id]) }}">
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
@endsection
