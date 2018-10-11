<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<?php if(isset($_SESSION['current_user'])){
		header("Location: ./homepage.php");
	} else {
		?>
	
	<p>Please login</p>
	<form action="./partials/authenticate_user.php" method="POST">
	<label for="username">Username:</label><br>
	<input type="text" name="username" id="username"><br>
		<label for="password">Password: </label><br>
		<input type="password" name="password" id="password"><br> <br>
		<button type="submit">Login</button>
	</form>
<?php } ?>
</body>
</html>