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
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <form action="{{route('register')}}" method="POST">
                        @csrf
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" name="name" placeholder="Username">
                                @error('name')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" name="email" placeholder="Email">
                                @error('email')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-phone'></i>
                                <input type="text" name="phone" placeholder="Phone No.">
                                @error('phone')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password">
                                @error('password')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
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
                    <div class="alert alert-success" id="close">
                        {{ session('success') }}
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-danger" id="close">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="form-wrapper align-items-center">
                        <div class="form sign-in">
                            <form action="{{url('signin')}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <i class='bx bx-mail-send'></i>
                                    <input type="email" name="email" placeholder="Email">
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <i class='bx bx-lock-alt'></i>
                                    <input type="password" name="password" placeholder="Password">
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
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
	</div>
    <script src="{{asset('login/js/main.js')}}"></script>
    <script>
        setTimeout(function() {
            document.getElementById('close').style.display = 'none';
        }, 3000);
    </script>



</body>
</html>
