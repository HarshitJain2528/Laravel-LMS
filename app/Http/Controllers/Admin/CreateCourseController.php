<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    public function createCourse(Request $request)
    {
        $validatedData = $request->validate([
            'courseName' => 'required|string',
            'courseCode' => 'required',
            'teacher' => 'required|exists:users,id',
            'courseDuration' => 'required',
        ]);

        $validatedData['students_enrolled'] = 0;

        Course::create([
            'course_name' => $validatedData['courseName'],
            'course_code' => $validatedData['courseCode'],
            'teacher_id' => $validatedData['teacher'],
            'students_enrolled' => $validatedData['students_enrolled'],
            'duration' => $validatedData['courseDuration'],
        ]);

        return redirect('admin/courses');
    }
}
