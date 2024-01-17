<?php

namespace App\Http\Controllers\Teacher;
use App\Models\Assignment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function createAssignment(Request $request)
    {
        $request->validate([
            'assignment_title' => 'required|string',
            'assignment_question' => 'required|array',
            'assignment_marks' => 'required',
            'course' => 'required|exists:courses,id',
        ]);
        // dd($request->all());

        
        $questions = $request->input('assignment_question');
        $formattedQuestions = [];
        foreach ($questions as $key => $question) {
            $formattedQuestions["question_$key"] = $question;
        }
        Assignment::create([
            'assignment_title' => $request->assignment_title,
            'assignment_question' => json_encode($formattedQuestions),
            'total_marks' => $request->assignment_marks,
            'course_id' => $request->course,
        ]);

        return redirect('/teacher/create/assignments')->with('success','Assignment created successfully');
    }
}
