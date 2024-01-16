<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

    public function showClasses()
    {
        return view('admin.classes');
    }

    public function showCourses()
    {
        $courses = Course::all();
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.courses', compact('courses', 'teachers'));
    }

    

    public function showReports()
    {
        return view('admin.reports');
    }
}
