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

		
		<section class="inputs">
			<section>
				<legend><span class="number">1</span> Select Meme Background</legend>
				
				<section id="selectMemeBack">
					<img id="memeStart"  src="images/StartMeme.jpg" alt="Spongebob"  />
					
					<img id="meme1" src="images/Imagination-Spongebob.jpg" alt="Spongebob" />
					<input type="image" src="images/Imagination-Spongebob.jpg" id="selectMeme-btn-1" /> 
					
					<img id="meme2" src="images/doge-mem-minimalizm-sobaka.jpg"  alt="Spongebob" />
					<input type="image" src="images/doge-mem-minimalizm-sobaka.jpg" id="selectMeme-btn-2" />
					
					<img id="meme3" src="images/Troll-Guy.jpg"  alt="Spongebob" />
					<input type="image" src="images/Troll-Guy.jpg" id="selectMeme-btn-3" />
					
					<img id="meme4" src="images/smile.png"  alt="Spongebob" />
					<input type="image" src="images/smile.png" id="selectMeme-btn-4" />
				</section>
			</section>
			
			<section>
				<legend ><span class="number">2</span> Input Text</legend>
				<section> 
					<legend id="subLegend">Top-text</legend>
					<textarea id="top-text" oninput="UpdadeText()" ></textarea>
					
					<span id="controlDescr"> Text size: </span> 
					<input type="range" id="top-text-size-input" min="0.05" max="0.25" value="0.12" step="0.01" onmouseup="UpdadeText()">
					
					<span id="controlDescr"> Top text color: </span> 
					<input type="color" id="top_text_color" value="#ffffff" >
				</section>
				<section> 
					<legend id="subLegend">Bottom-text</legend>
					<textarea id="bottom-text" oninput="UpdadeText()" ></textarea>
					
					<div id="controlDescr">Text size: </div> 
					<input type="range" id="bottom-text-size-input" min="0.05" max="0.25" value="0.12" step="0.01" onmouseup="UpdadeText()">
					<span id="controlDescr">Bottom text color: </span> 
					<input type="color" id="bottom_text_color" value="#ffffff">
				</section>
			</section>
			
			<section>
			<legend id="subLegend"><span class="number">3</span> Upload and Generate meme:</legend>
				<input type="file" id="image-input" accept="image/*">
				<button id="generate-btn">Generate!</button>
			</section>
		</section>
		
		
		<aside class="outputs">
				<legend ><span class="number"><></span> Your meme:</legend>
				<canvas id="meme-canvas" title="Right click -> &quot;Save image as...&quot;"></canvas>
				<a id="download">Download as image</a>
				<!-- <a id="download">Download as image</a> -->
		</aside>
		
        <script src="meme-generator.js"></script>
    </body>
</html>
