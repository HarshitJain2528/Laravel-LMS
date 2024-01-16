<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\User;

class MessageController extends Controller
{
    public function showMessages()
    {
        $users = User::where('role', 'teacher')->where('id', '!=', auth()->id())->get(); // Fetch all users except the authenticated user
        $receiver = null; // Initialize receiver as null initially

        $messages = [];
        foreach ($users as $user) {
            $messages[$user->id] = Messages::where(function ($query) use ($user) {
                $query->where('sender_id', auth()->id())
                    ->where('receiver_id', $user->id);
            })->orWhere(function ($query) use ($user) {
                $query->where('sender_id', $user->id)
                    ->where('receiver_id', auth()->id());
            })->orderBy('created_at', 'asc')->get();
        }

        return view('admin.messages', compact('users', 'messages'));
    }


    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message_content' => 'required',
        ]);

        Messages::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $validatedData['receiver_id'],
            'message_content' => $validatedData['message_content'],
        ]);

        // Optionally, you might load the receiver here to pass it to the view after sending the message.
        $receiver = User::findOrFail($validatedData['receiver_id']);

        // Assuming you want to redirect back to the chat window after sending the message
        return redirect()->route('chat.show', ['receiverId' => $receiver->id]);
    }
}
