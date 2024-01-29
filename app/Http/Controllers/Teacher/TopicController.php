<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Create a new topic for a course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function topicCreate(Request $request)
    {

        $request->validate([
            'course' => 'required|exists:courses,id',
            'topic' => 'required|string',
            'videos' => 'required|array|min:1',
            'videos.*' => 'url',
            'notes' => 'required|file|mimes:pdf|max:10240',
        ]);

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
            $notesPath = 'teacherassets/notes/' . $notes;
            $topic->notes = $notesPath;
        }

        $topic->save();

        return redirect()->route('topic')->with('success', 'Topic created successfully');
    }
}
