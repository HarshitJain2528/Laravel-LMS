@extends('teacher.layouts.main')

@section('teacher-attendence-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Attendance Table for Teacher -->
            <div class="attendance-table p-4 mb-4 border rounded">
                <h3 class="mb-3">Attendance for Previous 10 Days and Today</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th></th> <!-- Empty corner cell -->
                                @foreach ($previousDays as $previousDay)
                                    <th class="{{ $previousDay->isToday() ? 'current-date current-date-highlight' : '' }}">{{ $previousDay->format('Y-m-d') }}</th>
                                @endforeach
                                <th class="{{ now()->isToday() ? 'current-date current-date-highlight' : '' }}">{{ now()->format('Y-m-d') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    @foreach ($previousDays as $previousDay)
                                        @php
                                            $attendanceDate = $previousDay->toDateString();
                                            $attendance = $student->attendances->where('created_at', '>=', $previousDay->startOfDay())
                                                ->where('created_at', '<=', $previousDay->endOfDay())
                                                ->first();
                                            $isCurrentDate = $previousDay->isToday();
                                            $isWeekend = $previousDay->isWeekend();
                                        @endphp
                                        <td class="{{ $attendance ? 'present' : 'absent' }}{{ $isCurrentDate ? ' current-date-highlight' : '' }}">
                                            @if ($isWeekend)
                                                <button type="button" class="btn btn-secondary btn-sm">
                                                    Off
                                                </button>
                                            @else
                                                <button type="button" class="btn {{ $attendance ? 'btn-success' : 'btn-danger' }} btn-sm">
                                                    {{ $attendance ? 'Present' : 'Absent' }}
                                                </button>
                                            @endif
                                        </td>
                                    @endforeach
                                    @php
                                        $currentDateAttendance = $student->attendances->where('created_at', '>=', now()->startOfDay())
                                            ->where('created_at', '<=', now()->endOfDay())
                                            ->first();
                                    @endphp
                                    <td class="{{ $currentDateAttendance ? 'present current-date-highlight' : 'absent current-date-highlight' }}">
                                        @if (now()->isWeekend())
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                Off
                                            </button>
                                        @else
                                            <button type="button" class="btn {{ $currentDateAttendance ? 'btn-success' : 'btn-danger' }} btn-sm">
                                                {{ $currentDateAttendance ? 'Present' : 'Absent' }}
                                            </button>
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
