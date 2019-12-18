<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="{{ asset('/login') }}/css/style.css">
		<title>Halaman login | LDKOM</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<h1>Login Aplikasi LDKOM</h1>
				<form class="form" method="POST" action="{{ route('auth.login') }}">
				@csrf
					<input type="text" placeholder="Email" name="email">
					<input type="password" placeholder="Password" name="password">
					<button type="submit" id="login-button">Login</button>
				</form>
			</div>
			
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<script src="{{ asset('/frontend') }}/assets/vendor/jquery/jquery.min.js"></script>
		<script src="{{ asset('/login') }}/js/script.js"></script>
	</body>
</html>