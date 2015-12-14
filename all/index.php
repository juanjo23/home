<!DOCTYPE html>
<html>
<head>
	<title>List of Words</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require '../conexion.php'; ?>	
	<div class="message">Click in the word to show/hide its meaning</div>
	<div class='col-izq'>
		<table>
			<thead>
				<tr><th>Word</th><th>Meaning</th></tr>
			</thead>
			<tbody>			
				<?php 
					$total = count($datos);
					$mid = $total / 2;
					$words = array_keys($datos);
					for($i=0; $i<$mid; $i++){
						$word = $words[$i];				
						echo "<tr><td class='word'>$word</td><td>$datos[$word]</td></tr>";
					}	
				 ?>				
			</tbody>
		</table>

	</div>
	<div class='col-der'>
		<table>
			<thead>
				<tr><th>Word</th><th>Meaning</th></tr>
			</thead>
			<tbody>			
				<?php 					
					for($i=$mid; $i<$total; $i++){
						$word = $words[$i];
						echo "<tr><td class='word'>$word</td><td>$datos[$word]</td></tr>";
					}	
				 ?>				
			</tbody>
		</table>
	</div>
	<script src="../js/jquery-2.1.1.min.js"> </script>
	<script src="../js/script.js"> </script>
</body>
</html>
