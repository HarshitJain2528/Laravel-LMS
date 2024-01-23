<?php

namespace App\Http\Controllers\Student;

use App\Models\Messages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StudentMessageController extends Controller
{
    public function showMessages()
    {
        $teachers = User::where('role', 'teacher')->get(); // Fetch all teachers
        $studentId = auth()->id(); // Get the authenticated student's ID

        return view('student.help', compact('teachers', 'studentId'));
    }

    public function sendMessageToTeacher(Request $request)
    {
        $validatedData = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message_content' => 'required',
        ]);

        $message = Messages::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $validatedData['receiver_id'],
            'message_content' => $validatedData['message_content'],
        ]);

        // You can load the user relationship to get the sender's name
        $message->load('sender');

        return response()->json([
            'success' => true,
            'newMessage' => view('student.message_partial', ['messages' => [$message]])->render(),
        ]);
    }


    public function fetchMessages(Request $request)
    {
        $receiverId = $request->get('receiver_id');
        $messages = Messages::where(function ($query) use ($receiverId) {
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($receiverId) {
            $query->where('sender_id', $receiverId)
                ->where('receiver_id', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        // Return the messages as JSON
        return response()->json(view('student.message_partial', compact('messages'))->render());
    }

}
