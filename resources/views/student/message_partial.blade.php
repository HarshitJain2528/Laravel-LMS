@foreach($messages as $message)
    <div class="message">
        <strong>{{ $message->sender->name }}:</strong> {{ $message->message_content }}
    </div>
@endforeach
