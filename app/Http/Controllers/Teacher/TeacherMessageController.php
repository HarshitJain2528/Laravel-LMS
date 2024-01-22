<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Messages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherMessageController extends Controller
{
    public function showMessages()
    {
        $superAdmins = User::where('role', 'superadmin')->get(); // Fetch all super admins
        $teacherId = auth()->id(); // Get the authenticated teacher's ID

        // Fetch messages organized by super admin ID
        $messages = [];
        foreach ($superAdmins as $superAdmin) {
            $messages[$superAdmin->id] = Messages::where(function ($query) use ($teacherId, $superAdmin) {
                $query->where('sender_id', $teacherId)
                    ->where('receiver_id', $superAdmin->id);
            })->orWhere(function ($query) use ($teacherId, $superAdmin) {
                $query->where('sender_id', $superAdmin->id)
                    ->where('receiver_id', $teacherId);
            })->orderBy('created_at', 'asc')->get();
        }

        return view('teacher.communication', compact('superAdmins', 'messages'));
    }

    // TeacherMessageController.php

// TeacherMessageController.php

public function sendMessageToSuperAdmin(Request $request)
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

    // Return the success response
    return response()->json([
        'success' => true,
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
        return response()->json(view('teacher.message_partial', compact('messages'))->render());
    }
}
