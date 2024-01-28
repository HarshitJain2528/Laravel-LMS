@extends('teacher.layouts.main')

@section('teacher-student-section')
    <style>
        /* Your main stylesheet */

        .current-course {
            font-weight: bold;
            color: #3498db;
        }

        .current-topic {
            font-style: italic;
            color: #27ae60;
        }
    </style>
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Student Information Table -->
            <div class="student-information p-4 mb-4 border rounded">
                <h3 class="mb-3">Student Information</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Current Course</th>
                                <th>Current Topic</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td class="current-course">
                                        @if(isset($studentActivities[$student->id]))
                                            {{ $studentActivities[$student->id]->course->course_title ?? 'N/A' }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td class="current-topic">
                                        @if(isset($studentActivities[$student->id]))
                                            {{ $studentActivities[$student->id]->topic->topic ?? 'N/A' }}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
