<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="e-mail" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="*******">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<a href="register.php" style="margin-left: 110px;">  Register</a>
		</div>
	</form>


</body>
</html>