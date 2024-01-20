<?php

// app/Http/Controllers/Student/AttendenceController.php

namespace App\Http\Controllers\Student;

use App\Models\Attendence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendenceController extends Controller
{
    public function mark(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);

        // Check if attendance is already marked for today
        $existingAttendance = Attendence::where('std_id', auth()->user()->id)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if ($existingAttendance) {
            return response()->json(['status' => 'error', 'message' => 'Attendance already marked for today.']);
        }

        Attendence::create([
            'status' => $request->status,
            'std_id' => auth()->user()->id,
        ]);

        return response()->json(['status' => 'success']);
    }

    public function checkAttendanceStatus()
    {
        $user = Auth::user();
        $attendance = Attendence::where('std_id', $user->id)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        return response()->json(['status' => $attendance ? 'marked' : 'not-marked']);
    }
}
