<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
class DisplayController extends Controller
{
    //student side
    public function index()
    {
        $courses = Course::all();
        return view('student.index',compact('courses'));
    }
    public function batchStudent()
    {
        return view('student.batchStudent');
    }
    public function single()
    {
        return view('student.single');
    }
    public function subjectList()
    {
        return view('student.subjectList');
    }
    public function assign()
    {
        return view('student.assign');
    }
    public function syllabus()
    {
        return view('student.syllabus');
    }
    public function reminderStudent()
    {
        return view('student.reminders');
    }
    public function attendence()
    {
        return view('student.attendence');
    }
    public function courses()
    {
        $courses = Course::all();
        return view('student.courses',compact('courses'));
    }
    public function notify()
    {
        return view('student.notification');
    }
    public function profile()
    {
        return view('student.profile');
    }
    public function help()
    {
        return view('student.help');
    }
    public function topics($id)
    {
        $courses = Course::where('id',$id)->get();
        return view('student.courses.topics',compact('courses'));
    }
    public function desc()
    {
        return view('student.courses.desc');
    }
    public function next()
    {
        return view('student.courses.next');
    }
}
