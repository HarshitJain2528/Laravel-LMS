<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Create a new course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCourse(Request $request) 
    {
        
        $request->validate([
            'courseTitle' => 'required|string|max:255',
            'description' => 'required|string',
            'courseDuration' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $logo = time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('teacherassets/img'), $logo);
            $logoPath = 'teacherassets/img/' . $logo;
        }

        Course::create([
            'course_title' => $request->input('courseTitle'),
            'course_description' => $request->input('description'),
            'course_duration' => $request->input('courseDuration'),
            'logo' => $logoPath ?? null, 
        ]);

        return redirect('/teacher/create/courses')->with('success', 'Course created successfully');
    }

}
