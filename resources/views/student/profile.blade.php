@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Profile</strong></h1>
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
                {{-- <div class="heading mb-4">
                    <h2>Student Information</h2>
                </div> --}}
           
                {{-- Profile Table with Edit Option --}}
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center">
                                    {{-- Centered Logo --}}
                                    <div class="text-center">
                                        <img src="{{asset('student/images/profile.jpg')}}" alt="Logo" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                    <a href="#">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>
                                    JohnDoe
                                    <a href="#" class="float-right">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    johndoe@example.com
                                    <a href="#" class="float-right">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>
                                    25
                                    <a href="#" class="float-right">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Password Change</th>
                                <td>
                                    <!-- Display Previous Password -->
                                    <p>Previous Password: ********</p>
                            
                                    <!-- Password Change Form Toggle Button -->
                                    <a href="#" class="float-right" id="togglePasswordChange">Change Password</a>
                            
                                    <!-- Password Change Form (Initially Hidden) -->
                                    <form id="passwordChangeForm" style="display: none;">
                                        <div class="form-group">
                                            <label for="newPassword">New Password</label>
                                            <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirmPassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>
                                    Male
                                    <a href="#" class="float-right">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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