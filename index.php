<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>.: Home :.</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="styles/base.css">
</head>
<body>
	<h1>Word of the Day</h1>
	<div class="container-dicc">
		<div class="container-list">
			<?php include 'conexion.php'; ?>
			<input type="text" class="inpt" placeholder="Search word..." id="input-search">
			<div class="list-words">
			  <?php
				$words = array_keys($datos);
				for($i=0; $i<count($words); $i++){
					echo "<div class='proj'>$words[$i]</div>";
				}
			  ?>
			  <script>
				var words =
					<?php echo json_encode($datos).";";?>
			  </script>
			</div>
			<div class="view-all">View all...</div>
		</div>
		<div class="container-right">
			<div id="mean"></div>
			<input type="text" class="inpt" placeholder="Word..."        id="input-word" style="margin-bottom:15px;">
			<input type="text" class="inpt" placeholder="Translation..." id="input-mean">
		</div>
	</div>

	<div class="links">
	 	<table>
	 		<tr>
	 			<td>
	 				<a href="https://trello.com/" target="_blank" >
	 					<img src="images/trello.png">
	 				</a>
	 			</td>
				<td>
					<a href="http://www.deezer.com/" target="_blank">
						<img src="images/deezer.png">
					</a>
				</td>
				<td>
	 				<a href="https://www.duolingo.com/" target="_blank">
	 					<img src="images/duolingo.png">
	 				</a>
	 			</td>
				<td>
	 				<a href="https://mail.google.com/" target="_blank">
	 		 			<img src="images/gmail.png">
	 				</a>
	 			</td>

	 		<tr class="tr-text">
	 			<td>Trello</td>
	 			<td>Deezer</td>
	 			<td>Duolingo</td>
	 			<td>Gmail</td>
	 		</tr>
	 		<tr>
	 			<td>
	 				<a href="https://www.facebook.com/" target="_blank">
	 		 			<img src="images/facebook.png">
	 				</a>
	 			</td>
	 			<td>
	 				<a href="https://www.youtube.com/" target="_blank">
	 		 			<img src="images/youtube.png">
	 				</a>
	 			</td>
	 			<td>
	 				<a href="http://lyricstraining.com/" target="_blank">
	 		 			<img src="images/lyrics.png">
	 				</a>
	 			</td>
	 			<td>
	 				<a href="https://github.com/juanjo23" target="_blank">
	 					<img src="images/octocat.png">
	 				</a>
	 			</td>

	 		</tr>
	 		<tr>
	 			<td>Facebook</td>
	 			<td>Youtube</td>
	 			<td>Lyrics Training</td>
	 			<td>GitHub</td>
	 		</tr>
	 	</table>
	 </div>
	 <div class="test">

	 <div class="final-links">

	 	<a href="http://www.deezer.com/" target="_blank">Deezer</a> &nbsp; | &nbsp;
	 	<a href="https://twitter.com/" target="_blank">Twitta</a> &nbsp; | &nbsp;
	 	<a href="https://chains.cc/" target="_blank">Chains</a> &nbsp; | &nbsp;
	 	<a href="http://www.newsinlevels.com/" target="_blank">News in Levels</a> &nbsp; | &nbsp;
	 	<a href="https://translate.google.com/" target="_blank">Traductor</a>
	 </div>

	 </div>
	 <script src="js/jquery-2.1.1.min.js"> </script>
	 <script src="js/script.js"> </script>
</body>
</html>
