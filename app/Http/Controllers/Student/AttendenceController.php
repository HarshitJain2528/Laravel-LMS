<?php

namespace App\Http\Controllers\Student;
use App\Models\Attendence;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function mark(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);
        Attendence::create([
            'status' => $request->status,
            'std_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success','attendence marked');
    }
}
