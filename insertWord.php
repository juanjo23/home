<?php
	$mysqli = new mysqli("localhost", "root", "", "mydictionary");
	if ($mysqli->connect_errno) {
    	echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$word = $_REQUEST['word'];
	$mean = $_REQUEST['mean'];

	$mysqli->set_charset("utf8");
	$mysqli->query("INSERT INTO word (word, mean) VALUES('$word', '$mean')");
	$resultado = $mysqli->query("SELECT word, mean FROM word ORDER BY word ASC");

	while ($fila = $resultado->fetch_assoc()) {
	    $word = $fila['word'];
	    $mean = $fila['mean'];
		echo "<div class='proj'>$word</div>";
	}
?>
