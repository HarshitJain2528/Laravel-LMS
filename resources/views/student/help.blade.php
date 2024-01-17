@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Help </strong></h1>
            {{-- <div class="text-center">
                <img src="{{asset('student/images/profile.jpg')}}" alt="Logo" class="img-fluid rounded-circle" style="width: 150; height: 150;">
            </div> --}}
        </div>
    </div>
</div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-4">
                    <h2>Need Help</h2>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="#" method="post">
                @csrf

                <div class="form-group">
                    <label for="course">Select Course</label>
                    <select class="form-control" id="course" name="course">
                        <option value="course1">Course 1</option>
                        <option value="course2">Course 2</option>
                        <option value="course3">Course 3</option>
                        {{-- Add more courses as needed --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="topic">Select Topic</label>
                    <select class="form-control" id="topic" name="topic">
                        <option value="topic1">Topic 1</option>
                        <option value="topic2">Topic 2</option>
                        <option value="topic3">Topic 3</option>
                        {{-- Add more topics as needed --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="problem">Describe the Problem</label>
                    <textarea class="form-control" id="problem" name="problem" rows="4" placeholder="Enter your problem here"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<hr>
@include('student.layout.footer')
<script>
    document.getElementById('togglePasswordChange').addEventListener('click', function() {
        // Toggle visibility of the password change form
        var passwordChangeForm = document.getElementById('passwordChangeForm');
        passwordChangeForm.style.display = passwordChangeForm.style.display === 'none' ? 'block' : 'none';
    });
</script>