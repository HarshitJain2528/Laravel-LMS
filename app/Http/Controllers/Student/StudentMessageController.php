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

    // /**
    //  * Send a message from student to teacher.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function sendMessageToTeacher(Request $request)
    // {
    //     dd($request->all());
    //     $validatedData = $request->validate([
    //         'receiver_id' => 'required|exists:users,id',
    //         'message_content' => 'required',
    //     ]);

    //     $message = Messages::create([
    //         'sender_id' => auth()->id(),
    //         'receiver_id' => $validatedData['receiver_id'],
    //         'message_content' => $validatedData['message_content'],
    //     ]);

    //     $message->load('sender');

    //     return response()->json([
    //         'success' => true,
    //         'newMessage' => view('student.message_partial', ['messages' => [$message]])->render(),
    //     ]);
    // }

    // /**
    //  * Fetch messages between student and teacher.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function fetchMessages(Request $request)
    // {

    //     $receiverId = $request->get('receiver_id');

    //     $messages = Messages::where(function ($query) use ($receiverId) {
    //         $query->where('sender_id', auth()->id())
    //             ->where('receiver_id', $receiverId);
    //     })->orWhere(function ($query) use ($receiverId) {
    //         $query->where('sender_id', $receiverId)
    //             ->where('receiver_id', auth()->id());
    //     })->orderBy('created_at', 'asc')->get();

    //     return response()->json(view('student.message_partial', compact('messages'))->render());
    // }


    public function sendMessage(Request $request)
    {
        $message = new Messages();
        $message->sender_id = auth()->user()->id; // Assuming authenticated user is student
        $message->receiver_id = $request->receiver_id;
        $message->message_content = $request->input('messageContent'); // Corrected: use input() to get form data
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

    // Fetch sender and receiver names
    foreach ($messages as $message) {
        $senderName = User::find($message->sender_id)->name;
        $receiverName = User::find($message->receiver_id)->name;
        $message->sender_name = $senderName;
        $message->receiver_name = $receiverName;
    }

    return response()->json(['messages' => $messages]);
}

}
