<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssignmentReview;
use App\Models\Attendence;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function showProfile()
    {
        $data = User::where('role','superadmin')->get();
        return view('admin.profile', compact('data'));
    }


    public function showDashboard()
    {
        $today = Carbon::now()->format('Y-m-d');
        
        $presentCount = Attendence::whereDate('created_at', $today)->count();
        $courses = Course::count();
        $students = User::where('role', 'student')->count();
    
        return view('admin.dashboard', compact('courses', 'students', 'presentCount'));
    }

    public function showCourses()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }

    public function showStudents()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.students', compact('students'));
    }

    public function showTeachers()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.teachers', compact('teachers'));
    }


    public function showAttendence()
    {
        $attendence = Attendence::all();

        $studentData = Attendence::select('users.name as student_name', 'status', DB::raw('count(*) as count'))
        ->join('users', 'attendences.std_id', '=', 'users.id')
        ->groupBy('users.name', 'status')
        ->get();


        $studentNames = array_values($studentData->pluck('student_name')->unique()->toArray());

        $date = Attendence::select(DB::raw('DATE(created_at) as date'))
        ->groupBy(DB::raw('DATE(created_at)'))
        ->pluck('date')
        ->toArray();

        $presentCount = $studentData->where('status', 'present')->pluck('count')->toArray();
        $absentCount = $studentData->where('status', 'absent')->pluck('count')->toArray();

        return view('admin.attendence_report', compact('attendence', 'studentNames', 'date', 'presentCount', 'absentCount'));
    }


    public function showAssignment()
    {
        $assignmentData = User::where('role', 'student')->get();
        return view('admin.assignment_report', compact('assignmentData'));
    }

    public function getAssignmentDetails($id)
    {
        $courseDetails = AssignmentReview::where('std_id', $id)->get();

        return response()->json(['courseDetails' => $courseDetails]);
    }


    public function editProfile(Request $request)
    {

        try {
            $updateData = DB::table('users')
                ->where('role','superadmin')
                ->update(['name' =>  $request->get('name'), 'phone' => $request->get('phone')]);

            if ($updateData > 0) {
                return redirect()->back()->with('success', 'Profile updated successfully');
            } else {
                return redirect()->back()->with('error', 'User not found');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the profile');
        }
    }
}




