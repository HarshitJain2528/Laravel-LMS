@include('student.layout.header')
<div class="site-section-cover overlay" style="background-image: url('student/images/hero_bg.jpg');"> 
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
            <h1><strong>Reviews</strong></h1>
        </div>
    </div>
</div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading mb-4">
                    <h2>Notifications from Teacher</h2>
                </div>

                <div class="card-body">
                    {{-- Display success message if any --}}
                    {{-- @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif --}}
                    
                    {{-- Display a professional announcement using Bootstrap list group --}}
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Write down important information.</h5>
                                <small><i class="fas fa-bell mr-2 text-warning"></i>2 hours ago</small>
                            </div>
                            <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod nec nunc vitae cursus.</p>
                        </div>
                        <br/>
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Organize your thoughts using bullet points.</h5>
                                <small><i class="fas fa-bell mr-2 text-warning"></i>3 hours ago</small>
                            </div>
                            <p class="mb-1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <br/>
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Keep track of tasks and deadlines.</h5>
                                <small><i class="fas fa-bell mr-2 text-warning"></i>4 hours ago</small>
                            </div>
                            <p class="mb-1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <br/>
                        <div class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Highlight key points for easy reference.</h5>
                                <small><i class="fas fa-bell mr-2 text-warning"></i>5 hours ago</small>
                            </div>
                            <p class="mb-1">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<hr>
@include('student.layout.footer')
