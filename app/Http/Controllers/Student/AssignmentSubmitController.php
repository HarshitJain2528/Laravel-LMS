<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\AssignmentReview;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
class AssignmentSubmitController extends Controller
{
    /**
     * Submit an assignment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitAssignment(Request $request)
    {
        $request->validate([
            'assignmentName' => 'required',
            'course' => 'required',
            'totalmarks' => 'required',
            'fileUpload' => 'required|file|mimes:pdf',
        ]);

        try {
            if ($request->hasFile('fileUpload')) {
                $fileUpload = time().'.'.$request->fileUpload->getClientOriginalExtension();
                $request->fileUpload->move(public_path('student/assignment'), $fileUpload);
                $assignmentPath = 'student/assignment/' . $fileUpload;
            }

            AssignmentReview::create([
                'assignment_name' => $request->assignmentName,
                'std_id' => auth()->user()->id,
                'assignment_id' => $request->assignmentId,
                'course_name' => $request->course,
                'total_marks' => $request->totalmarks,
                'pdf' => $assignmentPath,
            ]);

            return redirect()->back()->with(['success' => 'Assignment Uploaded Successfully']);
        } 
            catch (\Exception $e) {

            return redirect()->back()->with(['error' => 'Error uploading assignment. Please try again.']);
        }

    }
}
