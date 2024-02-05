@extends('teacher.layouts.main')

@section('teacher-topic-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Student Information Table -->
            <div class="p-4 mb-4 border rounded">
                <h3 class="mb-3">Topics</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Topics</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        @foreach ($topics as $topic)
                        <tbody>
                            <tr>
                                <td>{{$topic->topic}}</td>
                                <td>
                                    @if($topic->notes)
                                        <a href="{{asset( $topic->notes) }}" target="_blank">View PDF</a>
                                    @else
                                        No PDF available
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
