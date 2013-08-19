<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SQLite 3</title>
</head>
<body style="font-size: 1em;">
	<table border=10>
		<?php
			$bd=new SQLite3("preguntasyrespuestas.db");
			$resultado = $bd->query("SELECT * FROM 'cat_piw' ORDER BY 'id' DESC;");
			while($fila = $resultado->fetchArray()){
				echo "<tr><td>".$fila["pregunta"]."</td><td>".$fila["respuesta"]."</td><td><img alt='imagen".$fila["id"].".JPG' src='".$fila["imagen"]."' width=300px></td></tr>";
			}
			$bd->close();
		?>
	</table>
</body>
</html>