@extends('admin.layouts.main')

@push('title')
    Profile
@endpush

@section('admin-profile-section')
    @include('admin.layouts.sidebar')
    <div class="container-fluid mt-8 text-left">
      <div class="row">
          <div class="col-md-8 mt-5 mx-auto">
              <div class="card shadow-lg rounded">
                  <div class="card-body">
                      <div class="row justify-content-center align-items-center">
                          <div class="col-md-6">
                              @foreach($data as $items)
                              <h2 class="mb-4 mt-4">{{$items->name}}</h2>
                              <p class="mb-3"><strong>Position:</strong>{{$items->role}}</p>
                              <p class="mb-3"><strong>Email:</strong> {{$items->email}}</p>
                              <p class="mb-3"><strong>Phone:</strong> {{$items->phone}}</p>
                              <button class="btn btn-primary" id="editProfileBtn">Edit Profile</button>
                          </div>
                          <div class="col-md-4 d-flex justify-content-end align-items-start">
                              <div class="position-relative">
                                  <div class="circular-container">
                                      <img src="{{ asset('adminassets/images/m1.jpg') }}" alt="User Image" class="img-fluid" style="border-radius: 50%; width: 200px;">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <div class="custom-modal" id="editProfileModal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="submit" class="btn-sm btn-danger" id="close" aria-label="Close">
                    <span aria-hidden="true"> <i class='bx bx-x'></i> </span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('edit') }}">
                  @csrf
                  <div class="mb-3">
                      <label for="edit_name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="edit_name" name="name" value="{{$items->name}}">
                  </div>

                  <div class="mb-3">
                      <label for="edit_phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="edit_phone" name="phone" value="{{$items->phone}}">
                  </div>
                  @endforeach
                  <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>

            </div>
        </div>
    </div>

@endsection
    <script>
        // Custom JavaScript and jQuery for modal
        document.addEventListener('DOMContentLoaded', function () {
            var editProfileBtn = document.getElementById('editProfileBtn');
            var editProfileModal = document.getElementById('editProfileModal');
            var closeModalBtn = editProfileModal.querySelector('#close');

            editProfileBtn.addEventListener('click', function () {
                editProfileModal.style.display = 'block';
            });

            closeModalBtn.addEventListener('click', function () {
                editProfileModal.style.display = 'none';
            });
        });

    </script>
