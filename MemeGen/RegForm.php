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
			<legend ><span class="number"> <> </span> Login Form:</legend>
			
			<form class="login-form" action="includes/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="First Name"/>
				<input type="text" name="uid" placeholder="Faculty Number"/>
				<input type="text" name="topic" placeholder="RefTopic"/>
				<input type="password" name="pwd" placeholder="Password"/>
				<button type="submit" name="submit">Register</button>
			   <p class="message">Registered? <a href="index.php">Log in here.</a></p>
			</form>
			
		  </div>
		</div>
		</header>
	</body>
	 
</html>