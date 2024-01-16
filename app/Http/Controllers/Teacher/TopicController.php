<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function topicCreate(Request $request)
    {
        $validatedData = $request->validate([
            'course' => 'required|exists:courses,id',
            'topic' => 'required|string',
            'videos.*' => 'url', // Assuming videos are provided as an array of URLs
            'notes' => 'file|mimes:pdf',
        ]);

        if ($request->hasFile('notes')) {
            $notes = time() . '.' . $request->notes->getClientOriginalExtension();
            $request->notes->move(public_path('teacherassets/pdf'), $notes);
            $notesPath = 'teacherassets/pdf/' . $notes;
        }

        // Format the video links into an array of associative arrays
        $formattedVideoLinks = array_map(function ($link) {
            return ['link' => $link];
        }, $validatedData['videos']);

        Topic::create([
            'topic' => $validatedData['topic'],
            'video' => json_encode($formattedVideoLinks),
            'notes' => $notesPath,
            'course_id' => $validatedData['course'],
        ]);

        return redirect()->route('topic')->with('success', 'Topic Created Successfully');
    }
}

