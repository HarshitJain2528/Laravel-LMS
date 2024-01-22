<!-- teacher.communication.blade.php -->

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
                                <!-- Chat messages will be loaded dynamically here -->
                            </div>
                            <!-- Chat input form can be added here if needed -->
                            <form method="POST" class="sendMessageForm" action="{{ route('teacher.send.message') }}">
                                @csrf
                                <input type="hidden" name="receiver_id" value="{{ $superAdmin->id }}">
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

    <!-- Include the JavaScript code -->
    @include('teacher.message_js')
@endsection
