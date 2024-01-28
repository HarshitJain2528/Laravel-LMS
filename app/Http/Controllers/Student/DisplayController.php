<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Models\Course;
use App\Models\Topic;
use App\Models\Assignment;
use App\Models\RecentActivity;
use App\Models\User;
use App\Models\Review;

class DisplayController extends Controller
{
    /**
     * Display the student dashboard with available courses.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::all();

        return view('student.index', compact('courses'));
    }

    /**
     * Display attendance for a specific student.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function attendence($id)
    {
        $data = User::where('id', $id)->get();

        return view('student.attendence', compact('data'));
    }

    /**
     * Display all available courses.
     *
     * @return \Illuminate\View\View
     */
    public function courses()
    {
        $courses = Course::all();

        return view('student.courses', compact('courses'));
    }

    /**
     * Display reviews for a specific student.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function reviews($id)
    {
        $reviews = Review::where('std_id', $id)->get();

        return view('student.reviews', compact('reviews'));
    }

    /**
     * Display the profile of a specific student.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function profile($id)
    {
        $profileData = User::where('id', $id)->get();

        return view('student.profile', compact('profileData'));
    }

    /**
     * Display the help page.
     *
     * @return \Illuminate\View\View
     */
    public function help()
    {
        return view('student.help');
    }

    /**
     * Display topics and assignments for a specific course.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function topics($id)
    {

        $courses = Course::where('id', $id)->get();
        $topics = Topic::where('course_id', $id)->get();
        $assignment = Assignment::where('course_id', $id)->get();
        return view('student.topics', compact('courses', 'topics', 'assignment'));
    }

    /**
     * Display the details of a specific topic.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function desc($id)
    {
        $data = Topic::where('id', $id)->get();
        $topic = Topic::find($id); // Fetch the topic
        $courseId = $topic->course_id; // Get the course ID associated with the topic

    RecentActivity::create([
        'user_id' => auth()->user()->id,
        'course_id' => $courseId, // Store the course ID associated with the topic
        'topic_id' => $topic->id,
    ]);
        return view('student.desc', compact('data'));
    }

    /**
     * Display assignments for a specific course.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function assignment($id)
    {

        $assignment = Assignment::with(['course'])->where('id', $id)->get();

        return view('student.assignment', compact('assignment'));
    }

    /**
     * Display the next page for a specific topic.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function next($id)
    {

        $data = Topic::where('id', $id)->get();

        return view('student.next', compact('data'));
    }

    /**
     * Update the profile information for the authenticated student.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $data = User::findOrFail($id);

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $data->update([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->filled('password') ? Hash::make($request->input('password')) : $data->password,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');

    }
}
