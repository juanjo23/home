<?php
	/* Dummy data */
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "mydictionary";

	$mysqli = mysqli($host, $user, $pass, $db);	
	if ($mysqli->connect_errno) {
    	echo "Falló en la conexión a MySQL: " . $mysqli->connect_error;
	}
	
	$mysqli->set_charset("utf8");
	$result = $mysqli->query("SELECT word, mean FROM word ORDER BY word ASC");
	$datos = array();
	while ($fila = $result->fetch_assoc()) {
	    $word = $fila['word'];
	    $mean = $fila['mean'];    
	    $datos[$word] = $mean;
	}	
?>

