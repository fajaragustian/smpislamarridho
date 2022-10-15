<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('backend/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend}/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
                                   <form method="POST" action="{{ route('admin.reset.password.submit') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
									<div class="p-5">
										<div class="text-center" >
											<img src="{{ asset('images/logo.png') }}" width="180"  class="ms-20" alt="">
                                            <h4 class="mt-2 font-weight-bold">Genrate New Password</h4>
                                            <p class="text-muted">We received your reset password request. Please enter your new password!</p>
										</div>
										<div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Mail Address"/>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
										<div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"value="{{ old('password') }}" required autocomplete="new-password" autofocus placeholder="Enter Your Password"/>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">New Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" autofocus placeholder="Enter Your New Confirmation Password"/>
                                        </div>
										<div class="d-grid gap-2">
											<button type="submit" class="btn btn-primary">Change Password</button> <a href="authentication-login.html" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
										</div>
									</div>
                                    </form>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{ asset('backend/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
