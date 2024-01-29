@extends('teacher.layouts.main')

@section('teacher-topic-create-section')
    @include('teacher.layouts.sidebar')

     <!-- Main content area -->
     <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Create Lesson Topic Form -->
            <div class="create-lesson-topic-form p-4 mb-4 border rounded">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-success">
                        {{session('error')}}
                    </div>
                @endif
                <h3 class="mb-3">Create Topic</h3>
                <form action="{{route('create.topic')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="course" class="form-label">Select Course</label>
                        <select type="text" class="form-control" id="topicTitle" name="course">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="topic" class="form-label">Topic Name</label>
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Enter topic Name">
                    </div>
                    <div class="mb-3" id="videoLinksContainer">
                        <label for="videos" class="form-label">Videos</label>
                        <div class="video-link-inputs">
                            <input type="text" class="form-control" name="videos[]" placeholder="Enter video link 1">
                            {{-- <input type="text" class="form-control" name="videos[]" placeholder="Enter video link 2"> --}}
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addVideoLink()">Add Another Video</button>
                        <small class="text-muted">You can add multiple video links.</small>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <input type="file" class="form-control" id="notes" name="notes" placeholder="">
                    </div>


                    <button type="submit" class="btn btn-primary">Create Topic</button>
                </form>
            </div>
        </div>
    </div>
@endsection
