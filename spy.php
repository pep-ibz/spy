<?php

	if((isset($_GET["origen"])) && (isset($_GET["destino"]))){

		$mysqli = new mysqli('localhost', 'root', '', 'spy', 3306);

		if(!$mysqli || $mysqli->connect_errno){

			die('Error connecting to database.');
		}

		$origen = $_GET["origen"];
		$destino = $_GET["destino"];

		$mysqli->query("INSERT INTO estadistica VALUES (id, '$origen', '$destino');");

		header("Location: $destino");
		die('redirected');
	}
?>