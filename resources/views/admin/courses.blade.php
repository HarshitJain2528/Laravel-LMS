@extends('admin.layouts.main')

@push('title')
    Courses
@endpush

@section('admin-courses-section')
    @include('admin.layouts.sidebar')
    <div class="container mt-4 ml-4 p-0">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
         @elseif(session('error'))
             <div class="alert alert-danger">
                 {{ session('error') }}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
         @endif
        <h2>Courses</h2>
        <div class="card">
            <div class="card-body">
                <!-- Student Table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->course_title}}</td>
                                <td>{{$course->course_duration}}</td>
                                <td>
                                    <a href="{{url('/admin/delete-course',$course->id)}}" class="btn btn-danger">Delete</a>
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

<script src="{{asset('login/js/main.js')}}"></script>
<script>
    // Function to close the alert
    function closeAlert(element) {
        element.style.display = 'none';
    }

    // Add event listeners to close the alert on click
    document.addEventListener('click', function (event) {
        if (event.target.closest('.close')) {
            const alert = event.target.closest('.alert');
            closeAlert(alert);
        }
    });
</script>
