@extends('admin.layouts.main')

@section('admin-assignment-section')
    @include('admin.layouts.sidebar')

    <div class="container mt-4 ml-4 p-0">
        <h2>Assignment Report</h2>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rakesh Sharma</td>
                                    <td>
                                        <button type="button" class="btn btn-warning view-button" data-student-id="1">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Custom Modal -->
<div class="custom-modal" id="customModal">
    <div class="modal-content">
        <span class="close-button" id="closeButton">&times;</span>
        <div class="modal-body">
            <!-- Table to display student details -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Months</th>
                        <th>Percentage</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody id="modalBody">
                    <!-- Student details will be dynamically added here using JavaScript -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Existing styles */

    .custom-modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: whitesmoke;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    .close-button {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close-button:hover {
        color: black;
    }
</style>

<!-- Custom JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get modal elements
        var customModal = document.getElementById('customModal');
        var closeButton = document.getElementById('closeButton');

        // Get button element
        var viewButton = document.querySelector('.view-button');
        
        // Add click event listener to the View button
        viewButton.addEventListener('click', function () {
            // Simulate fetching student details (replace with actual data)
            var studentId = this.getAttribute('data-student-id');
            var studentDetails = {
                id: studentId,
                name: 'Rakesh Sharma', // Replace with actual data
                // Add more properties as needed
                progress: {
                    May: 30,
                    June: 50,
                    July: 75,
                    August: 90,
                    September: 40,
                    October: 60,
                    November: 80,
                    December: 100
                    // Add progress values for each month
                }
            };

            // Populate modal body with student details
            var modalBody = document.getElementById('modalBody');

            // Add months and progress bars dynamically
            for (var month in studentDetails.progress) {
                if (studentDetails.progress.hasOwnProperty(month)) {
                    modalBody.innerHTML += '<tr><td>' + month + '</td><td><div class="progress"><div class="progress-bar" style="width:' + studentDetails.progress[month] + '%">' + studentDetails.progress[month] + '%</div></div></td></tr>';
                }
            }

            // Show the modal
            customModal.style.display = 'block';
        });

        // Add click event listener to the Close button
        closeButton.addEventListener('click', function () {
            // Close the modal
            customModal.style.display = 'none';
        });

        // Close the modal if the user clicks outside the modal content
        window.addEventListener('click', function (event) {
            if (event.target === customModal) {
                customModal.style.display = 'none';
            }
        });
    });
</script>
@endsection
       