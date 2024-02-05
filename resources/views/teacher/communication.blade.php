@extends('teacher.layouts.main')

@section('teacher-messages-section')
    @include('teacher.layouts.sidebar')

    <div class="container mt-4">
        <h2>Communication with Admins and Students</h2>
        <div class="row">
            <!-- Left sidebar with admin and student list -->
            <div class="col-md-3">
                <div class="user-list"  data-fetch-messages-route="{{ route('teacher.fetch.messages') }}"
                data-send-message-route="{{ route('teacher.send.message') }}">
                    <!-- Loop through superadmins -->
                    @foreach($superAdmins as $superAdmin)
                        <div class="user-item" onclick="openChat('{{ $superAdmin->id }}', 'admin', '{{ route('teacher.fetch.messages') }}')">
                            <span>{{ $superAdmin->name }}</span>
                            <span class="arrow">&#10148;</span>
                        </div>
                    @endforeach

                    <!-- Loop through students -->
                    @foreach($students as $student)
                        <div class="user-item" onclick="openChat('{{ $student->id }}', 'student', '{{ route('teacher.fetch.messages') }}')">
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
                        @include('teacher.chat_box', ['user' => $superAdmin, 'type' => 'admin', 'fetchRoute' => route('teacher.fetch.messages')])
                    @endforeach

                    @foreach($students as $student)
                        @include('teacher.chat_box', ['user' => $student, 'type' => 'student', 'fetchRoute' => route('teacher.fetch.messages')])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
