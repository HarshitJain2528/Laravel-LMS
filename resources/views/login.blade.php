<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
		<div class="row">
            <!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <form action="{{route('register')}}" method="POST">
                        @csrf
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" name="name" placeholder="Username">
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-phone'></i>
                                <input type="text" name="phone" placeholder="Phone No.">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <button>
                                Sign up
                            </button>
                            <p>
                                <span>
                                    Already have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign in here
                                </b>
                            </p>
                        </form>
                    </div>
                </div>

			</div>
			<!-- END SIGN UP -->

			<!-- SIGN IN -->

			<div class="col align-items-center flex-col sign-in">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <form action="{{url('signin')}}" method="POST">
                        @csrf
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <i class='bx bx-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit">
                                Sign in
                            </button>
                            {{-- <p>
                                <b>
                                    Forgot password?
                                </b>
                            </p> --}}
                            <p>
                                <span>
                                    Don't have an account?
                                </span>
                                <b onclick="toggle()" class="pointer">
                                    Sign up here
                                </b>
                            </p>
                        </form>
					</div>
				</div>
				<div class="form-wrapper">

                </div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->

		<!-- CONTENT SECTION -->
		<div class="row content-row">
            <!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
                {{-- <div class="text sign-in">
                   

				</div>
				<div class="img sign-in">

                </div> --}}
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
                {{-- <div class="img sign-up">

                </div>
				<div class="text sign-up">
                    <h2>
                        Join with us
					</h2>

				</div> --}}
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
    <script src="{{asset('login/js/main.js')}}"></script>
    <script>
        // Function to close the alert
        function closeAlert(element) {
            element.style.display = 'none';
        }

        // Add event listeners to close the alert on click
        document.addEventListener('click', function (event) {
            if (event.target.closest('.close')) {
                const alert = event.target.closest('.alert');
                closeAlert(alert);
            }
        });
    </script>



</body>
</html>
