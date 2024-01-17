@include('student.layout.header')      
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-10 text-center">
        <h1><strong>Assignments</strong></h1>
        <div class="pb-4 get"><strong class="text-white">Posted on May 22, 2020 &bullet; By Admin</strong></div>
      </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row divison">
            <div class="col-md-10 mx-auto divison">
                {{-- <content here> --}}
                    <table class="table text-center ">
                        <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Code</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Submit</th>
                                <th scope="col">Download/View</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- Replace the sample data with actual data from your backend -->
                            <tr>
                                <td>Math Assignment 1</td>
                                <td>Mathematics</td>
                                <td>2024-01-15</td>
                                <td>Pending</td>
                                <td>
                                    <!-- Add actions (e.g., links to submit or view details) -->
                                    <a href="#" class="btn btn-primary">Submit</a>
                                </td>
                                <td>
                                    <!-- Add actions (e.g., links to submit or view details) -->
                                    <a href="#" class="btn btn-primary">Click Here</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Physics Lab Report</td>
                                <td>Physics</td>
                                <td>2024-01-20</td>
                                <td>Submitted</td>
                                <td>
                                    <!-- Add actions (e.g., links to submit or view details) -->
                                    <a href="#" class="btn btn-primary">Submit</a>
                                </td>
                                <td>
                                    <!-- Add actions (e.g., links to submit or view details) -->
                                    <a href="#" class="btn btn-primary">Click Here</a>
                                </td>
                            </tr>
                            <!-- Add more rows for other assignments -->
                        </tbody>
                    </table>
                    
                </div>
        
@include('student.layout.footer')
