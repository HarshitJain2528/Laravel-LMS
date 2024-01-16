@extends('teacher.layouts.main')

@section('video')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Display Topics -->
            <div class="topic-list p-4 mb-4 border rounded">
                <h3 class="mb-3">Topics</h3>
                @foreach ($topics as $topic)
                    <div class="mb-4">
                        <h4>{{ $topic->topic }}</h4>

                        @php
                            $videoLinks = json_decode($topic->video, true);
                        @endphp

                        @foreach ($videoLinks as $videoKey => $videoLink)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" class="embed-responsive-item" src="{{ $videoLink }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        @endforeach

                        @if (!empty($topic->notes))
                            <p>Notes: <a href="{{ asset($topic->notes) }}" target="_blank">Download Notes</a></p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
