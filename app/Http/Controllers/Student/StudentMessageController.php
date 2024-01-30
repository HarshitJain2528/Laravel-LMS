<?php

namespace App\Http\Controllers\Student;

use App\Models\Messages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentMessageController extends Controller
{
    /**
     * Show the messages view for student help.
     *
     * @return \Illuminate\View\View
     */
    public function showMessages()
    {

        $teachers = User::where('role', 'teacher')->get();
        $studentId = auth()->id();

        return view('student.help', compact('teachers', 'studentId'));
    }

    public function sendMessage(Request $request)
    {
        $message = new Messages();
        $message->sender_id = auth()->user()->id;
        $message->receiver_id = $request->receiver_id;
        $message->message_content = $request->input('messageContent');
        $message->save();

        return response()->json(['success' => true]);
    }

    public function getMessages($teacherId)
    {
        $messages = Messages::where(function ($query) use ($teacherId) {
            $query->where('sender_id', auth()->user()->id)
                ->where('receiver_id', $teacherId);
        })->orWhere(function ($query) use ($teacherId) {
            $query->where('sender_id', $teacherId)
                ->where('receiver_id', auth()->user()->id);
        })->orderBy('created_at', 'asc')->get();

        foreach ($messages as $message) {
            $senderName = User::find($message->sender_id)->name;
            $receiverName = User::find($message->receiver_id)->name;
            $message->sender_name = $senderName;
            $message->receiver_name = $receiverName;
        }

        return response()->json(['messages' => $messages]);
    }

}
