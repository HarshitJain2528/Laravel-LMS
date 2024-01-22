<?php

namespace App\Http\Controllers\Teacher;
use App\Models\Assignment;
use App\Models\AssignmentReview;
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
    public function updateMarks(Request $request, $id)
    {
        // Find the specific record for the student
        $marks = AssignmentReview::where('id', $id)->first();
    
        // Check if the record exists
        if (!$marks) {
            // If no marks exist for the student, create a new record
            $marks = new AssignmentReview();
            $marks->id = $id;
        }
    
        // Update the obtained marks for the specific record
        $marks->obtained_marks = $request->input('obtained_marks');
        $marks->save();
    
        return redirect()->back()->with('success', 'Marks updated successfully.');
    }
    

}
