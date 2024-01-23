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

    public function assignmentDetails($id)
    {
        $assignmentDetails = AssignmentReview::where('id', $id)->first();
        return response()->json(['assignmentDetails' => $assignmentDetails]);
    }
    

    public function updateMarks(Request $request)
{
    try {
        $id = $request->id;

        // Fetch assignment details
        $assignmentDetails = AssignmentReview::find($id);

        // Validate obtained marks against total marks
        if ($request->input('obtained_marks') > $assignmentDetails->total_marks) {
            return redirect()->route('submit.assignments')->with('error', 'Obtained marks cannot be greater than total marks.');
        }

        // Update the AssignmentReview record based on the provided ID
        AssignmentReview::where('id', $id)
            ->update([
                'obtained_marks' => $request->input('obtained_marks'),
                // Add other fields to update if needed
            ]);

        return redirect()->route('submit.assignments')->with('success', 'Marks updated successfully.');
    } catch (\Exception $e) {
        return redirect()->route('submit.assignments')->with('error', $e->getMessage());
    }
}

    
    
    
    

}

