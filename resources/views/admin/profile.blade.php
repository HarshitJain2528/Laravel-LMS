@extends('admin.layouts.main')

@section('admin-profile-section')
    @include('admin.layouts.sidebar')

    <!-- User Details -->
   <!-- Your main view file -->
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
                          <p class="mb-3"><strong>Phone:</strong> +1234567890</p>
                          <p class="mb-4"><strong>Age:</strong> 55</p>
                          
                          <!-- Edit Profile Button -->
                          <button class="btn btn-primary" id="editProfileBtn">Edit Profile</button>
                      </div>

                      <div class="col-md-4 d-flex justify-content-end align-items-start">
                          <div class="position-relative">
                              <div class="circular-container">
                                  <img src="{{ asset('adminassets/images/m1.jpg') }}" alt="User Image" class="img-fluid" style="border-radius: 50%; width: 200px;">

                                  <!-- Pencil Icon for Editing -->
                                  <button type="button" class="btn btn-link edit-icon" id="editImageBtn" style="color: black;">
                                      <i class="bx bx-pencil"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Image Edit Modal -->
<div class="modal" id="editImageModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Edit Image</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{ asset('adminassets/images/m1.jpg') }}" alt="User Image" class="img-fluid" style="width: 100%;">
              <!-- Add an input field for image uploading if you want to allow image changes -->
              <!-- <input type="file" id="newImage"> -->
          </div>
      </div>
  </div>
</div>
  

    <!-- Edit Profile Modal -->
    <div class="custom-modal" id="editProfileModal">
        <div class="modal-content" style="background-color: rgb(212, 161, 161); color: black;">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit Profile Form (Add form elements as needed) -->
                <form method="get" action="{{ route('edit') }}">
                  @csrf
                  <div class="mb-3">
                      <label for="edit_name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="edit_name" name="name" value="{{$items->name}}">
                  </div>
              
                  <div class="mb-3">
                      <label for="edit_age" class="form-label">Email</label>
                      <input type="text" class="form-control" id="edit_age" name="email" value="{{$items->email}}">
                  </div>
                  @endforeach
                  <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>
              
            </div>
        </div>
    </div>

    <script>
        // Custom JavaScript and jQuery for modal
        document.addEventListener('DOMContentLoaded', function () {
            var editProfileBtn = document.getElementById('editProfileBtn');
            var editProfileModal = document.getElementById('editProfileModal');
            var closeModalBtn = editProfileModal.querySelector('.close');

            editProfileBtn.addEventListener('click', function () {
                editProfileModal.style.display = 'block';
            });

            closeModalBtn.addEventListener('click', function () {
                editProfileModal.style.display = 'none';
            });
        });

        
    // Custom JavaScript and jQuery for modal
    document.addEventListener('DOMContentLoaded', function () {
        var editImageBtn = document.getElementById('editImageBtn');
        var editImageModal = document.getElementById('editImageModal');

        editImageBtn.addEventListener('click', function () {
            editImageModal.style.display = 'block';
        });

        // Close modal when close button or outside modal is clicked
        editImageModal.addEventListener('click', function (event) {
            if (event.target === this || event.target.getAttribute('data-dismiss') === 'modal') {
                editImageModal.style.display = 'none';
            }
        });
    });

    </script>
@endsection
