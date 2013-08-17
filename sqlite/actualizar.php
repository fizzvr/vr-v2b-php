<?php
	$bd = new SQLite3("preguntasyrespuestas.db");
	$bd->exec("update cat_piw set ip='localhost'; ");
	$bd->close();
?>