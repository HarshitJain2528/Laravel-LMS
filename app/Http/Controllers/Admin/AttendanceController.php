<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function fetchUpdatedData($duration)
    {
        $now = now();
        $attendence = Attendence::all();

        switch ($duration) {
            case '1day':
                $currentDate = $now->toDateString();
                break;
            case '1week':
                $currentDate = $now->subWeek();
                break;
            case '1month':
                $currentDate = $now->subMonth();
                break;
            case '6months':
                $currentDate = $now->subMonths(6);
                break;
            default:
                return response()->json(['error' => 'Invalid duration'], 400);
        }

        $attendence = Attendence::where('created_at', '>=', $currentDate)->get();

        $studentData = Attendence::select('users.name as student_name', 'status', DB::raw('count(*) as count'))
            ->join('users', 'attendences.std_id', '=', 'users.id')
            ->where('attendences.created_at', '>=', $currentDate)
            ->groupBy('users.name', 'status')
            ->get();

        $studentNames = array_values($studentData->pluck('student_name')->unique()->toArray());

        $date = Attendence::select(DB::raw('DATE(created_at) as date'))
            ->where('created_at', '>=', $currentDate)
            ->groupBy(DB::raw('DATE(created_at)'))
            ->pluck('date')
            ->toArray();

        $presentCount = $studentData->where('status', 'present')->pluck('count')->toArray();
        $absentCount = $studentData->where('status', 'absent')->pluck('count')->toArray();

        return view('admin.attendence_report', compact('attendence', 'studentNames', 'date', 'presentCount', 'absentCount'));
    }
}
