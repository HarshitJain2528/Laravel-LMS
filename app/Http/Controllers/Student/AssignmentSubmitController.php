<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\AssignmentReview;
use Illuminate\Http\Request;

class AssignmentSubmitController extends Controller
{
    public function submitAssignment(Request $request)
    {
        $request->validate([
            'assignmentName' => 'required',
            'course' => 'required',
            'totalmarks' => 'required',
            'fileUpload' => 'required|file|mimes:pdf',
        ]);
        
        if ($request->hasFile('fileUpload')) {
            $fileUpload = time().'.'.$request->fileUpload->getClientOriginalExtension();
            $request->fileUpload->move(public_path('student/assignment'), $fileUpload);
            $assignmentPath = 'student/assignment/' . $fileUpload;
        }
        // dd($assignmentPath);

        AssignmentReview::create([
            'assignment_name' => $request->assignmentName,
            'std_id' => auth()->user()->id,
            'course_name' => $request->course,
            'total_marks' => $request->totalmarks,
            'pdf' => $assignmentPath,
        ]);

        return redirect()->back()->with('success','assignment uploaded');
    }
}
