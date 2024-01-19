<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
       
        return view('admin.dashboard');
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
        return view('admin.assignment_report');
    }

    
    public function editProfile(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');

        try {
            // Update the user information using query builder
            $affectedRows = DB::table('users')
                ->where('role','superadmin')
                ->update(['name' => $name, 'email' => $email]);

            if ($affectedRows > 0) {
                return redirect()->back()->with('success', 'Profile updated successfully');
            } else {
                return redirect()->back()->with('error', 'User not found');
            }
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the update
            return redirect()->back()->with('error', 'An error occurred while updating the profile');
        }
    }
}
