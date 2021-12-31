<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Log in</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="{{ url('public') }}/plugins/icheck-bootstrap/icheck-bootstracss.min.css">

	<link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="{{('dashboard')}}"><b>MAINDASHOP</b></a>
	</div>
</div>

<div class="card">
	<div class="card-body login-card-body">
		<p class="login-box-msg">Sign in to start your session</p>

			@include('template.utils.notif')
		<form action="{{url('login')}}" method="post">
			@csrf
			<div class="input-group mb-3">
				<input type="email" class="form-control" placeholder="Email" name="email">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-envelope"></span>
					</div>
				</div>
			</div>
			<div class="input-group mb-3">
				<input type="password" class="form-control" placeholder="Password" name="password">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
			</div>
			
		<div class="row">
			<div class="col-8">
				<div class="icheck-primary">
					<input type="checkbox" id="remember">
					<label for="remember">
						Remember Me
					</label>
				</div>
			</div>
		</div>

		<div class="col-15">
			<button type="submit" class="btn btn-primary btn-block">Sign in</button>
		</div>
	</form>
	<p class="mb-1">
		<a href="forgot-password.html">I forgot my password</a>
	</p>
	<p class="mb-0">
		<a href="register.html" class="text-center">Register a new membership</a>
	</p>
</div>
	</div>
</div>

	<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
	<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
</body>
</html>

