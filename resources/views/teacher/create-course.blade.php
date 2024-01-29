@extends('teacher.layouts.main')

@section('teacher-create-course-section')
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
                <h3 class="mb-3">Create Course</h3>
                <form action="{{route('create.course')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="courseTitle" class="form-label">Course Title</label>
                        <input type="text" class="form-control" id="courseTitle" name="courseTitle" placeholder="Enter course title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Course Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter course description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="courseDuration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="courseDuration" name="courseDuration">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                    <!-- Additional fields or options can be added as needed -->

                    <button type="submit" class="btn btn-primary">Create Course</button>
                </form>
            </div>
        </div>
    </div>
@endsection
