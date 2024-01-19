@extends('admin.layouts.main')

@section('admin-attendence-section')

    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Student Attendence</h2>
        <div class="card">
            <div class="card-body">
                <!-- Teacher Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Student Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Himanshu Sharma</td>
                            <td>Introduction of html</td>
                            <td>12-1-2024</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-success">Present</button>
                                <button type="submit" class="btn btn-sm btn-danger">Absent</button>
                            </td>
                          </tr>
                            <!-- Add more rows for other teachers -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
