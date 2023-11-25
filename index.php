<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		<form action="controller/login.php" method="POST" class="login-username">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="submit">Login</button>
			</div>
			<p class="login-register-text">Anda Belum Punya Akun? <a href="register_view.php">Register Sekarang</a></p>
		</form>
	</div>
</body>
</html>