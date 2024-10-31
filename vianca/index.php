<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); ?>

	<form action="handleForm.php" method="POST">
		<p>Username <input type="text" placeholder="" name="firstName"></p>
		<p>Password <input type="password" placeholder="" name="password"></p>
		<p><input type="submit" value="Login" name="loginBtn"></p>
	</form>

    <a href="unset.php"><input type="submit" value="Logout" name="logoutBtn"></a>

    <h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>		
	</h2>

</body>
</html>