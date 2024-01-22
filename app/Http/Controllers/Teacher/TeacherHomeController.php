<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Topic;
use App\Models\User;
use App\Models\AssignmentReview;

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
        $students = User::where('role', 'student')->get();
        $previousDays = collect();

        // Add the previous 15 days to the $previousDays collection
        for ($i = 10; $i > 0; $i--) {
            $previousDays->push(now()->subDays($i));
        }
        return view('teacher.attendence', compact('students','previousDays'));
    }

    public function showReviews()
    {
        $reviews = Review::with('student')->whereHas('student', function ($query) {
            $query->where('role', '=', 'student');
        })->get();
        return view('teacher.reviews', compact('reviews'));
    }

    public function showTopicPage()
    {
        $courses = Course::all();
        return view('teacher.topic_create', compact('courses'));
    }

    public function assignmentSubmit()
    {
        $assignments = AssignmentReview::with('student')->get();

        return view('teacher.assignment_submit', compact('assignments'));
    }
}
