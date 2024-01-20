<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssignmentReview;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
        public function showProfile()
    {
        $data = User::where('role','superadmin')->get();
        return view('admin.profile', compact('data'));
    }


    public function showDashboard()
    {

        $courses = Course::count();
        $students = User::where('role', 'student')->count();
        return view('admin.dashboard', compact('courses','students'));
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
        return view('admin.attendence_report');
    }

    public function showAssignment()
    {
        $assignmentData = AssignmentReview::all();
        return view('admin.assignment_report', compact('assignmentData'));
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
