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

/**
 * Class HomeController
 *
 * @package App\Http\Controllers\Admin
 */
class HomeController extends Controller
{
    /**
     * Show the profile of the superadmin user.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showProfile()
    {
        
        $data = User::where('role', 'superadmin')->get();
        
        return view('admin.profile', compact('data'));
    }

    /**
     * Show the admin dashboard with relevant statistics.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showDashboard()
    {
        $today = Carbon::now()->format('Y-m-d');
        
        $presentCount = Attendence::whereDate('created_at', $today)->count();
        $courses = Course::count();
        $students = User::where('role', 'student')->count();
        return view('admin.dashboard', compact('courses', 'students', 'presentCount'));

    }

    /**
     * Show the list of courses.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showCourses()
    {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }

    /**
     * Show the list of students.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showStudents()
    {
        $students = User::where('role', 'student')->get();
        return view('admin.students', compact('students'));
    }

    /**
     * Show the list of teachers.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showTeachers()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.teachers', compact('teachers'));
    }

    /**
     * Show the attendance report.
     *
     * @return \Illuminate\Contracts\View\View
     */
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

        return view('admin.attendence-report', compact('attendence', 'studentNames', 'date', 'presentCount', 'absentCount'));
    }

    /**
     * Show the assignment report.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showAssignment()
    {
        $assignmentData = User::where('role', 'student')->get();
        return view('admin.assignment-report', compact('assignmentData'));
    }

    /**
     * Get assignment details for a specific user.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAssignmentDetails($id)
    {
        $courseDetails = AssignmentReview::where('std_id', $id)->get();
        return response()->json(['courseDetails' => $courseDetails]);
    }

    /**
     * Edit the profile of the superadmin user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editProfile(Request $request)
    {
        try {
            $updateData = DB::table('users')
                ->where('role', 'superadmin')
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
