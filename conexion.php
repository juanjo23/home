<?php
	$mysqli = new mysqli("localhost", "root", "", "mydictionary");
	if ($mysqli->connect_errno) {
    	echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	$mysqli->set_charset("utf8");
	$resultado = $mysqli->query("SELECT word, mean FROM word ORDER BY word ASC");
	$datos = array();
	while ($fila = $resultado->fetch_assoc()) {
	    $word = $fila['word'];
	    $mean = $fila['mean'];	    
	    $datos[$word] = $mean;	    
	}	
?>

