<!-- teacher.chat_box.blade.php -->

<div class="chat" id="{{ $type . $user->id . 'Chat' }}">
    <div class="chat-header">
        {{ $user->name }}
    </div>
    <div class="chat-messages" id="{{ $type . $user->id . 'Messages' }}">
        <!-- Chat messages will be loaded dynamically here -->
    </div>
    <!-- Chat input form -->
    <form method="POST" class="sendMessageForm" action="{{ route('teacher.send.message') }}">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $user->id }}">
        <div class="chat-input" id="chatInput">
            <textarea class="form-control messageContent" rows="2" placeholder="Type your message"></textarea>
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
</div>
