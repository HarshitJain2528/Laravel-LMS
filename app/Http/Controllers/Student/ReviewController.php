<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Submit a review for the authenticated student.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitReviews(Request $request){
        
        $request->validate([
            'review' => 'required',
        ]);

        Review::create([
            'review' => $request->review,
            'std_id' => auth()->user()->id,
        ]);

        return redirect()->back()->with('success', 'Review sent');
    }
}
