@extends('admin.layouts.main')

@section('admin-classes-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Lectures Summary</h2>
        <div class="card">
            <div class="card-body">
                <!-- Lectures Summary Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Topic</th>
                                <th>Lectures Completed</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Topic 1</td>
                                <td>8 out of 10</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Add more rows for other topics -->
                        </tbody>
                    </table>
                </div>
                <!-- Additional lecture-related content -->
            </div>
        </div>
    </div>
@endsection
