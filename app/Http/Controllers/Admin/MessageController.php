<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\User;

class MessageController extends Controller
{
    /**
     * Display the chat messages for teachers.
     *
     * @return \Illuminate\View\View
     */
    public function showMessages()
    {
        $users = User::where('role', 'teacher')->where('id', '!=', auth()->id())->get();

        $receiver = null;

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

    /**
     * Send a message to a specific teacher.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

        $receiver = User::findOrFail($validatedData['receiver_id']);

        return redirect()->route('chat.show', ['receiverId' => $receiver->id]);
    }

}
