<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function topicCreate(Request $request)
    {
        $request->validate([
            'course' => 'required|exists:courses,id', // Assuming 'courses' is your courses table
            'topic' => 'required|string',
            'videos' => 'required|array|min:1', // At least one video link is required
            'videos.*' => 'url', // Each video link should be a valid URL
            'notes' => 'required|file|mimes:pdf|max:10240', // PDF file, max 10MB
        ]);

        // dd($request->all());

        // Save topic information to the database
        $topic = new Topic();
        $topic->course_id = $request->input('course');
        $topic->topic = $request->input('topic');

        $videoLinks = $request->input('videos');
        $formattedVideoLinks = [];
        foreach ($videoLinks as $key => $videoLink) {
            $formattedVideoLinks["video_$key"] = $videoLink;
        }
        $topic->video = json_encode($formattedVideoLinks);

        if ($request->hasFile('notes')) {
            $notes = time().'.'.$request->notes->getClientOriginalExtension();
            $request->notes->move(public_path('teacherassets/notes'), $notes);
            $notesPath = 'teacherassets/img/' . $notes;
        }

        $topic->notes = $notesPath;

        $topic->save();

        return redirect()->route('topic')->with('success', 'Topic created successfully');
    }
}

