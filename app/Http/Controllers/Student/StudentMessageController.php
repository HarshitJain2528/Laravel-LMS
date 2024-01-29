<?php

namespace App\Http\Controllers\Student;

use App\Models\Messages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

    /**
     * Send a message from student to teacher.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessageToTeacher(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message_content' => 'required',
        ]);

        $message = Messages::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $validatedData['receiver_id'],
            'message_content' => $validatedData['message_content'],
        ]);

        $message->load('sender');

        return response()->json([
            'success' => true,
            'newMessage' => view('student.message_partial', ['messages' => [$message]])->render(),
        ]);
    }

    /**
     * Fetch messages between student and teacher.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
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

        return response()->json(view('student.message_partial', compact('messages'))->render());
    }
}
