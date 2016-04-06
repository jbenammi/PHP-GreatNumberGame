<?php 

session_start();


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>Great Number Game</title>
 	<meta name="description" content="This is a PHP assignment for Coding Dojo">
 	<link rel="stylesheet" type="text/css" href="style.css.php">
 
 </head>
 <body>

	<div id="container">
		<div id="game">
		 	<h1>Welcome to the Great Number Game!</h1>
		 	<p>I am thinking of a number between 1 and 100</p>
		 	<p>Take a guess!</p>
		 	<?php 
		 	if(isset($_SESSION['guess'])){
		 		if($_SESSION['guess'] == $_SESSION['randnum']){
		 			echo "<div class='correct'><h2>".$_SESSION['guess']." was the number!</h2><form action='PHP-GreatNumberGame.php' method='post'>
		 			<input type='hidden' value='".session_destroy()."' />
		 			<input type='submit' class='button' value='Play Again!' autofocus/></form></div>";
		 		}
		 		else if ($_SESSION['guess'] > $_SESSION['randnum']){
		 			echo "<div class='high'><h2>Too High Try Again.</h2></div>";
		 		}
		 		else {
		 			echo "<div class='low'><h2>Too Low Try Again.</h2></div>";
		 		}
			}
		 	?>
		 	<form action="Process.php" method="post">
		 		<input type="text" class="input" name="guess" placeholder="Enter your Guess" autofocus />
		 		<input type="submit" class="button" value="Submit!" />
		 	</form>
		</div>
	</div>

 	
 </body>
 </html>