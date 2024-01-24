<?php

/**
 * Admin Home Controller
 *
 * @category   Controller
 * @package    App\Http\Controllers\Admin
 * @author     Your Name
 */

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
        // Retrieve superadmin user data
        $data = User::where('role', 'superadmin')->get();
        
        // Return the view with the user data
        return view('admin.profile', compact('data'));
    }

    /**
     * Show the admin dashboard with relevant statistics.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showDashboard()
    {
        // Get the current date
        $today = Carbon::now()->format('Y-m-d');
        
        // Count the number of present attendances for today
        $presentCount = Attendence::whereDate('created_at', $today)->count();

        // Count the total number of courses
        $courses = Course::count();

        // Count the total number of students
        $students = User::where('role', 'student')->count();
    
        // Return the view with dashboard statistics
        return view('admin.dashboard', compact('courses', 'students', 'presentCount'));
    }

    /**
     * Show the list of courses.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showCourses()
    {
        // Retrieve all courses
        $courses = Course::all();

        // Return the view with the list of courses
        return view('admin.courses', compact('courses'));
    }

    /**
     * Show the list of students.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showStudents()
    {
        // Retrieve all students
        $students = User::where('role', 'student')->get();

        // Return the view with the list of students
        return view('admin.students', compact('students'));
    }

    /**
     * Show the list of teachers.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showTeachers()
    {
        // Retrieve all teachers
        $teachers = User::where('role', 'teacher')->get();

        // Return the view with the list of teachers
        return view('admin.teachers', compact('teachers'));
    }

    /**
     * Show the attendance report.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showAttendence()
    {
        // Retrieve all attendance records
        $attendence = Attendence::all();

        // Retrieve student attendance data for display
        $studentData = Attendence::select('users.name as student_name', 'status', DB::raw('count(*) as count'))
            ->join('users', 'attendences.std_id', '=', 'users.id')
            ->groupBy('users.name', 'status')
            ->get();

        // Extract unique student names from the data
        $studentNames = array_values($studentData->pluck('student_name')->unique()->toArray());

        // Extract distinct dates from the attendance records
        $date = Attendence::select(DB::raw('DATE(created_at) as date'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->pluck('date')
            ->toArray();

        // Extract counts of present and absent students
        $presentCount = $studentData->where('status', 'present')->pluck('count')->toArray();
        $absentCount = $studentData->where('status', 'absent')->pluck('count')->toArray();

        // Return the view with the extracted data
        return view('admin.attendence_report', compact('attendence', 'studentNames', 'date', 'presentCount', 'absentCount'));
    }

    /**
     * Show the assignment report.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showAssignment()
    {
        // Retrieve all student data for assignments
        $assignmentData = User::where('role', 'student')->get();

        // Return the view with assignment data
        return view('admin.assignment_report', compact('assignmentData'));
    }

    /**
     * Get assignment details for a specific user.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAssignmentDetails($id)
    {
        // Retrieve assignment details for the specified user
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
