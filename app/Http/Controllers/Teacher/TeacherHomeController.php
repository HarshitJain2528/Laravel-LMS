<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Topic;

class TeacherHomeController extends Controller
{
    public function course()
    {
        $courses = Course::all();
        return view('teacher.course', compact('courses'));
    }

    public function topic($id)
    {
        $topics = Topic::where('course_id', $id)->get();
        return view('teacher.topics', compact('topics'));
    }

    public function showStudent()
    {
        return view('teacher.students');
    }

    public function showAssignment()
    {
        $courses = Course::all();
        return view('teacher.create_assignement', compact('courses'));
    }

    public function showCreateCourses()
    {
        return view('teacher.create_course');
    }

    public function showAttendence()
    {
        return view('teacher.attendence');
    }

    public function showReviews()
    {
        return view('teacher.reviews');
    }

    public function showStudentPerformance()
    {
        return view('teacher.studentperformance');
    }

    public function showTopicPage()
    {
        $courses = Course::all();
        return view('teacher.topic_create', compact('courses'));
    }
}
