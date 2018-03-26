<?php
	session_start();
?>

<!DOCTYPE html>
<html>

	<head>
		<title>PHP Test</title>
		<link rel="stylesheet" href="stylelogin.css">
	</head>
	 
	<body>
	
	<header>
		<div class="login-page">
		  <div class="form">
			<legend ><span class="number"> <> </span> Register Form:</legend>
			<form class="login-form" action="includes/login.in.php" method="POST">
			  <input type="text" name="uid" placeholder="Faculty Number"/>
			  <input type="password" name="pwd" placeholder="Password"/>
			  <button type="submit" name="submit">Log In</button>
			   <p class="message">Not registered? <a href="RegForm.php">Create an account</a></p>
			</form>
			
		  </div>
		</div>
	</body>
	 
</html>