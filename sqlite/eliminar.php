<?php
	$bd = new SQLite3("preguntasyrespuestas.db");
	$bd->exec("delete from cat_piw where utc='2';");
	$bd->close();
?>