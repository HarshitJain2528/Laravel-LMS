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
    /**
     * Show the courses for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function course()
    {
        
        $courses = Course::all();
        return view('teacher.course', compact('courses'));
    }

    /**
     * Show the topics for a specific course.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function topic($id)
    {

        $topics = Topic::where('course_id', $id)->get();
        return view('teacher.topics', compact('topics'));
    }

    /**
     * Show the students for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showStudent()
    {
        return view('teacher.students');
    }

    /**
     * Show the assignment creation page for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showAssignment()
    {
        $courses = Course::all();
        return view('teacher.create_assignement', compact('courses'));
    }

    /**
     * Show the create courses page for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showCreateCourses()
    {
        return view('teacher.create_course');
    }

    /**
     * Show the attendance page for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showAttendence()
    {

        $students = User::where('role', 'student')->get();

        $previousDays = collect();
        for ($i = 10; $i > 0; $i--) {
            $previousDays->push(now()->subDays($i));
        }

        return view('teacher.attendence', compact('students', 'previousDays'));
    }

    /**
     * Show the reviews for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showReviews()
    {
        $reviews = Review::with('student')->whereHas('student', function ($query) {
            $query->where('role', '=', 'student');
        })->get();
        return view('teacher.reviews', compact('reviews'));
    }

    /**
     * Show the topic creation page for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function showTopicPage()
    {
        $courses = Course::all();
        return view('teacher.topic_create', compact('courses'));
    }

    /**
     * Show the submitted assignments for the teacher.
     *
     * @return \Illuminate\View\View
     */
    public function assignmentSubmit()
    {
        $assignments = AssignmentReview::with('student')->get();
        return view('teacher.assignment_submit', compact('assignments'));
    }
}
