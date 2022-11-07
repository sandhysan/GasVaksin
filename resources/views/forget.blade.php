<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Vaksin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginAssets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginAssets/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginAssets/css/main.css">
<!--===============================================================================================-->
</head>
<body >

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="/reset/proses" method="POST">
                    @csrf
					<span class="login100-form-title">
						<img src="Logo/GasVaksin_Logo.png" width="200" alt="" srcset="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Reset password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan NIK">
						<input class="input100" type="text" name="id" placeholder="NIK" autofocus required>

					</div>

					<div class="wrap-input100 validate-input" data-validate="email">
						<input class="input100" type="text" name="email" placeholder="email" required>

					</div>
                    <div class="wrap-input100 validate-input" data-validate="Masukan password">
						<input class="input100" type="password" name="password" placeholder="Password baru" required>

					</div>
                    @if (session('gagal'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('gagal') }}
                        </div>
                    @endif

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							kirim
						</button>
					</div>
                    <div class="text-center p-t-90">
						<a class="txt1" href="/login">
							"Login"
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="loginAssets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/vendor/bootstrap/js/popper.js"></script>
	<script src="loginAssets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginAssets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginAssets/js/main.js"></script>

</body>
</html>
