<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado</title>
	<style>
		.tablalistado {
			border-collapse: collapse;
			box-shadow: 0px 0px 8px #000;
			margin: 20px;
			margin: auto;
		}
		.tablalistado th {
			border: 1px solid #000;
			padding: 5px;
			background-color: #030303;
		}
		.tablalistado td {
			border: 1px solid #000;
			padding: 5px;
			background-color: #730E0E;
		}
	</style>
</head>
<body background="../img/dark.png" style="color: white;">
	<h1 align="center">Listado</h1>
	<?php
	$mysql = new mysqli("localhost", "root", "", "base4");
	if ($mysql->connect_error)
		die("problemas con la conexion a la base de datos");

	$registros = $mysql->query("select codigo,descripcion from rubros") or die($mysql->error);


	echo '<table class="tablalistado" align="center">';
	echo '<tr><th>Codigo</th><th>Descripcion</th></tr>';
	while ($reg = $registros->fetch_array()) {
		echo '<tr>';
		echo '<td>';
		echo $reg['codigo'];
		echo '</td>';
		echo '<td>';
		echo $reg['descripcion'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
	$mysql->close();
	?>
	<br>
	<table border="1" bgcolor="#030303" align="center">
		<tr align="center">
			<td>
				<a href="1rubros.html">
					<input type="button" value="Alta de Rubros"></a>
			</td>
			<td><a href="4consultas_rubros.html"><input type="button" value="Consulta de rubros"></td>
		</tr>
		<tr align="center">
			<td>
				<a href="6modificar_rubros.html
				"><input type="button" value="Modificacion de Rubros"></a>
			</td>
			<td><a href="9borrado_rubros.html"><input type="button" value="Borrado de Rubros"></td>
		</tr>
	</table>
</body>
</html>