<?php
	$bd = new SQLite3("preguntasyrespuestas.db");
	$bd->exec("update cat_piw set ip='127.0.0.1' where id=2; ");
	$bd->close();
?>