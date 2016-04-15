<?php 


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>Random Word Generator 2.0</title>
 	<meta name="description" content="Your next gen generator for nonsense words. Brought to you by Coding Dojo Assignments">
 	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

 </head>
 <body>
 	<div id="container">
 		<h3>Random Word <?php if(!isset($count)){
 			}
 			else { ?>
 				(attempt #<?= $count ?>) <?php } ?></h3>
 		<h1>
 		<?php if(!isset($randword)) {
 			}
 			else {
 				echo $randword ;
 			}
 			?></h1>
 		<div id="buttons">	
 		<form action="/RandWords/Generate" method="post">
 			<input class="subButton" type="submit" value="Generate" />
 		</form>
 		<form action="/RandWords/reset" method="post">
 			<input class="subButton" type="submit" value="Reset" />
 		</form>
 		</div>
 	</div>
 </body>
 </html>