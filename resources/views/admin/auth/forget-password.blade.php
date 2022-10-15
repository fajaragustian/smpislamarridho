<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
	<link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('backend/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css') }}" />
  <title>
     SMP ISLAM AR RIDHO
  </title>

</head>
<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<form action="{{ route('admin.forget.password.submit') }}" method="POST">
						@csrf
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="assets/images/icons/forgot-2.png" width="120" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>
						<div class="my-4">
							<label class="form-label">Email</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Mail Address"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-outline-primary btn-lg">Send Password Link</button>
                            <a href="{{ route('admin.login') }}" class="btn btn-outline-secondary btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
						</div>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
	<!--end wrapper-->
</body>

</html>
