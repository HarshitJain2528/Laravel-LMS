@extends('teacher.layouts.main')

@section('teacher-attendence-section')
    @include('teacher.layouts.sidebar')

    <!-- Main content area -->
    <div class="container mt-4 ml-4 p-0">
        <div class="content">
            <!-- Attendance Table for Teacher -->
            <div class="attendance-table p-4 mb-4 border rounded">
                <h3 class="mb-3">Attendance for 30 Days</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th></th> <!-- Empty corner cell -->
                                @for ($student = 1; $student <= 6; $student++)
                                    <th class="text-center">Student {{ $student }}</th>
                                @endfor
                                <!-- Add more student columns as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            @for ($day = 1; $day <= 30; $day++)
                                <tr>
                                    <td class="text-center">{{ $day }}</td>
                                    <td class="text-center"><i class='bx bxs-check-circle text-success' style="font-size: 24px;"></i></td>
                                    <!-- Add more cells for additional students -->
                                    <td class="text-center"><i class='bx bxs-x-circle text-danger' style="font-size: 24px;"></i></td>
                                    <td class="text-center"><i class='bx bxs-check-circle text-success' style="font-size: 24px;"></i></td>
                                    <td class="text-center"><i class='bx bxs-x-circle text-danger' style="font-size: 24px;"></i></td>
                                    <td class="text-center"><i class='bx bxs-check-circle text-success' style="font-size: 24px;"></i></td>
                                    <td class="text-center"><i class='bx bxs-x-circle text-danger' style="font-size: 24px;"></i></td>
                                </tr>
                            @endfor
                            <!-- Add more rows for additional days -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
