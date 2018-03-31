<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Meme Generator</title>
        <link rel="stylesheet" href="style.css">
    </head>
	
    <body>
		<header>
				<nav>
					<img id="logoImg"  src="images/logo.jpg" alt="Spongebob"  />

					<p> Hello, <?php
							if(isset($_SESSION['u_id'])){
							echo $_SESSION['u_first'] ;}
							
						?>!</p>
					<br> <br>
							<form action="includes/logout.inc.php" method="POST">	
							<button type="submit" name="submit"> Log Out. </button>
							</form> 
					<h2 id="homeA"> <a href="main.php" >Home </a> </h2>		
					<h2> <a href="about.php" >About Page </a> </h2>
				</nav>
				
				 <h1 >
					Welcome, 
					<?php
						if(isset($_SESSION['u_id'])){
						echo '<span id="punchWord">'.$_SESSION['u_first'] .'</span>' ;}
						else {
							echo 'you are not logged in! Please relog!';
						}
					?>!
				 </h1>
				 <h2>
					<?php
					if(isset($_SESSION['u_id'])){
					echo 'Your topic is ' . '<span id="punchWord">' . $_SESSION['u_topic'] . '</span>' ;
					}
					?>.
				</h2>
		</header>
		
		<section class="abouts">
			<p>
			<pre>
				Creator:
				Grigor M. Zotov,
				Computer Science student @Sofia University (FMI), 

				Web Project.
				Theme: MEME Generator.
				</pre>
				<hr>
				My project realizes a website where after entering a faculty number and password, the user has the opportunity to see the theme of his project, generate a meme on his subject and keep it.
				<br><br>
				The "Meme" generator uses several tools to create the desired invitation. We have the ability to enter text at the top and bottom of our meme. The text may be in a few lines, which will 
				also affect the picture itself.
				<hr>
				Feel free to have fun with it, test it, explore and use in your projects.
			</p>
		
		</section>

		
        <script src="meme-generator.js"></script>
    </body>
</html>
