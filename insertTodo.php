<?php
	$mysqli = new mysqli("localhost", "root", "", "todo");
	if ($mysqli->connect_errno) {
    	echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$todo = $_REQUEST['todo'];

	$mysqli->set_charset("utf8");
	$mysqli->query("INSERT INTO todo (todo) VALUES('$todo')");
	$resultado = $mysqli->query("SELECT todo FROM todo");

	while ($fila = $resultado->fetch_assoc()) {
		echo $fila['todo'];
	}
?>
