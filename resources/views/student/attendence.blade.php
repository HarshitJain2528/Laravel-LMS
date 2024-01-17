@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Attendance</strong></h1>
        </div>
    </div>
</div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-4">
                    <h2>Mark Your Attendance</h2>
                </div>

                {{-- Display success or error messages --}}
                {{-- @if(session('message')) --}}
                    {{-- <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}

                {{-- Display the form to mark attendance --}}
                <form action="{{ route('attendence') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="attendance_date">Attendance Date</label>
                        <input type="date" name="attendance_date" class="form-control" required>
                    </div>
                    
                    {{-- Check if attendance is already marked for today --}}
                    {{-- @if($markedToday) --}}
                        <p class="text-danger">Attendance already marked for today.</p>
                    {{-- @else --}}
                        <button type="submit" class="btn btn-primary">Mark Attendance</button>
                    {{-- @endif --}}
                </form>
            </div>
        </div>
    </div>
</div>

<hr>
@include('student.layout.footer')
