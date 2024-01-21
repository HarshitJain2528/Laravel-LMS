@extends('student.layout.main')
@section('student-profile')

<div class="site-section-cover overlay" style="background-image: url('../student/images/hero_bg.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                <h1><strong>Profile</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        @foreach($profileData as $data)
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <div class="text-center">
                                        <img src="{{asset('student/images/profile.jpg')}}" alt="Logo" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                    {{-- <a href="#">Edit</a> --}}
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>
                                    {{$data->name}}
                                    {{-- <a href="#" class="float-right">Edit</a> --}}
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    {{$data->email}}
                                    {{-- <a href="#" class="float-right">Edit</a> --}}
                                </td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td>
                                    {{$data->phone}}
                                    {{-- <a href="#" class="float-right">Edit</a> --}}
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>Password Change</th>
                                <td>
                                    <!-- Display Previous Password -->
                                    <p> </p>

                                    <!-- Password Change Form Toggle Button -->
                                    <a href="#" class="float-right" id="togglePasswordChange">Change Password</a>

                                    <!-- Password Change Form (Initially Hidden) -->
                                    <form  method="post" action="{{Route('change.password')}}" id="passwordChangeForm" style="display: none;">
                                        @csrf
                                        <div class="form-group">
                                            <label for="newPassword">New Password</label>
                                            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirmPassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                                        </div> --}}
                                        {{-- <button type="submit" name=" save" class="btn btn-primary">Change Password</button>
                                    </form> --}}
                                {{-- </td>
                            </tr> --}}
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection

<script>
    document.getElementById('togglePasswordChange').addEventListener('click', function() {
        // Toggle visibility of the password change form
        var passwordChangeForm = document.getElementById('passwordChangeForm');
        passwordChangeForm.style.display = passwordChangeForm.style.display === 'none' ? 'block' : 'none';
    });
</script>
