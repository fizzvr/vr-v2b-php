<?php
	$bd = new SQLite3("preguntasyrespuestas.db");
	$bd->exec("INSERT INTO cat_piw('utc','pregunta','respuesta','ip') VALUES ('t','¿Cuál es la capital de PERÚ?','LIMA','127.1.1.1');");
	$bd->close();
?>