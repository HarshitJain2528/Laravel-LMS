@extends('admin.layouts.main')

@push('title')
    Students
@endpush

@section('admin-students-section')
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
        <h2>Students</h2>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>
                                    <a href="{{url('/admin/delete-student',$student->id)}}" class="btn btn-danger">Delete</a>                                </td>                            
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
