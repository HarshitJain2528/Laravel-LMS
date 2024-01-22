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
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Password Change</th>
                                <td>
                                    <!-- Display Previous Password -->
                                    <p> </p>

                                    <!-- Password Change Form Toggle Button -->
                                    <!-- Modify this link in your existing code -->
                                    <a href="#" class="float-right" id="editDataButton" data-toggle="modal" data-target="#passwordChangeForm">EDIT DATA</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

                <div class="modal fade" id="passwordChangeForm" tabindex="-1" role="dialog" aria-labelledby="passwordChangeFormLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="passwordChangeFormLabel">Edit Profile Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('profile.update', $data->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" id="name" name="username" value="{{ $data->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone No.</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Change Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection

@push('scripts')
    <script>
        document.getElementById('editDataButton').addEventListener('click', function() {
            // Toggle visibility of the password change form
            var passwordChangeForm = document.getElementById('passwordChangeForm');
            $(passwordChangeForm).modal('show');
        });
    </script>
@endpush
