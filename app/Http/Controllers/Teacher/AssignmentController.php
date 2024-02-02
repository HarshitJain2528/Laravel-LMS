<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Assignment;
use App\Models\AssignmentReview;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Create a new assignment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createAssignment(Request $request)
    {

        try {
            $request->validate([
                'assignment_title' => 'required|string',
                'assignment_question' => 'required|array',
                'assignment_marks' => 'required',
                'course' => 'required|exists:courses,id',
            ]);
    
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
    
            return redirect('/teacher/create/assignments')->with('success', 'Assignment created successfully');
        }  catch (\Exception $e) {
            // Handle other types of exceptions
            return redirect()->back()->with('error', 'Error creating assignment. Please try again.');
        }

    }

    /**
     * Get assignment details by ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function assignmentDetails($id)
    {
        try {
            $assignmentDetails = AssignmentReview::findOrFail($id);
            return response()->json(['assignmentDetails' => $assignmentDetails]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Assignment not found.'], 404);
        }
    }

    /**
     * Update assignment marks.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateMarks(Request $request)
    {

        $id = $request->id;

        $assignmentDetails = AssignmentReview::find($id);

        if ($request->input('obtained_marks') > $assignmentDetails->total_marks) {
            return redirect()->route('submit.assignments')->with('error', 'Obtained marks cannot be greater than total marks.');
        }

        AssignmentReview::where('id', $id)
            ->update([
                'obtained_marks' => $request->input('obtained_marks'),
            ]);

        return redirect()->route('submit.assignments')->with('success', 'Marks updated successfully.');
        
    }
}
