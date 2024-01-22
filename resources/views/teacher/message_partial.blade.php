<!-- teacher.message_partial.blade.php -->

@foreach($messages as $message)
    <p><strong>{{ $message->sender->name }}:</strong> {{ $message->message_content }}</p>
@endforeach
