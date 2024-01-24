<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Models\Course;
use App\Models\Topic;
use App\Models\Assignment;
use App\Models\User;
use App\Models\Review;
class DisplayController extends Controller
{
    //student side
    public function index()
    {
        $courses = Course::all();
        return view('student.index',compact('courses'));
    }
    public function attendence($id)
    {
        $data = User::where('id',$id)->get();
        return view('student.attendence',compact('data'));
    }
    public function courses()
    {
        $courses = Course::all();
        return view('student.courses',compact('courses'));
    }
    public function reviews($id)
    {
        $reviews = Review::where('std_id',$id)->get();
        return view('student.reviews',compact('reviews'));
    }
    public function profile($id)
    {
        
        $profileData = User::where('id',$id)->get();
        return view('student.profile',compact('profileData'));
    }
    public function help()
    {
        return view('student.help');
    }
    public function topics($id)
    {
        $courses = Course::where('id',$id)->get();
        $topics = Topic::where('course_id',$id)->get();
        $assignment = Assignment::where('course_id',$id)->get();
        return view('student.topics',compact('courses','topics','assignment'));
    }
    public function desc($id)
    {
        // $courses = Course::where('id',$id)->get();
        $data = Topic::where('id',$id)->get();
        return view('student.desc',compact('data'));
    }
    public function assignment($id)
    {
        // $courses = Course::where('id',$id)->get();
        
        $assignment = Assignment::with(['course'])->where('id',$id)->get();
        return view('student.assignment',compact('assignment'));
    }
    public function next($id)
    {
        $data = Topic::where('id',$id)->get();
        return view('student.next',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        // Validate the request data
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
