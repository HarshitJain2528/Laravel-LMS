<?php

namespace App\Http\Controllers\Student;

use App\Models\Messages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentMessageController extends Controller
{
    public function showMessages()
    {
        // Fetch all teachers for messaging
        $teachers = User::where('role', 'teacher')->get();

        return view('student.help', compact('teachers'));
    }

    public function sendMessageToTeacher(Request $request)
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

        return redirect()->back();
    }
}
