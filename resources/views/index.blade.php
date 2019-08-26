<!DOCTYPE html>
<html>
<head>
<title>Sistem Managemant CBL</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="vendors/styles/style.css">

</head>
<body style="background-color:#00BCD4">

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">English Massive</h2>
			<h6 class="text-center mb-30">Login as Administrator!</h6>
			<form class="login100-form validate-form" method="post" action="{{url('/login_proses') }}">
            {{ csrf_field() }}
				<div class="input-group custom input-group-lg">
					<input type="email" class="form-control" placeholder="Email" name="email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="**********" name="password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<input type="submit" class="btn btn-lg btn-block" style="background-color:#c32361; color:#ffffff" value="Sign In"></button>
							
						</div>
					</div>
					<div class="col-sm-6">
						<!-- <div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div> -->
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>