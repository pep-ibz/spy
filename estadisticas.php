<?php

	if(isset($_GET['e']) && $_GET['e'] == true){

		$mysqli = new mysqli('localhost', 'root', '', 'spy', 3306);

		if(!$mysqli || $mysqli->connect_errno){

			die('Error connecting to database.');
		}

		$result = $mysqli->query("SELECT destino, COUNT(destino) AS cantidad, (SELECT COUNT(destino) FROM estadistica) AS total FROM estadistica GROUP BY origen, destino;");
	}
?>