<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Course;
use App\Models\Topic;
use App\Models\Assignment;
use App\Models\User;
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
    public function reviews()
    {
        return view('student.reviews');
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
    
        $assignment = Assignment::with('course')->where('id',$id)->get();
        return view('student.assignment',compact('assignment'));
    }
    public function next($id)
    {
        $data = Topic::where('id',$id)->get();
        return view('student.next',compact('data'));
    }
    // public function change(Request $request){
    //     // $data = new Login;
    //     if($request->isMethod('post'))
    //     {
    //         $newpw = $request->get('newPassword');
    //         $cnewp = $request->get('confirmPassword');
    //         if($newpw == $cnewp){
    //             $data = User::where('password')->first();
    //             if(isset($data))
    //             {
    //                 $data->password = $newpw;
    //                 $data->save();
    //                 return redirect('/change-password')->withSuccess("Password Updated Successfully");
    //             }
    //             else
    //             {
    //                 return redirect('/change-password')->withSuccess("Old Password not match");
    //             }
                
    //         }
    //         else
    //         {
    //             return redirect('/change-password')->withSuccess( "New password and Confirm new password does not match");
    //         }    
                
    //     }
    // }
}
