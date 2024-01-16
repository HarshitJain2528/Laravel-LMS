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

    public function sendMessageToSuperAdmin(Request $request)
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
