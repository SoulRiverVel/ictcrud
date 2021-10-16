<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Borrado de Rubros</title>
</head>
<body background="../img/Red Neon and Stones.jfif" style="color: white;">
	<h1 align="center">Borrado de Rubros</h1>
	<?php
	$mysql = new mysqli("localhost", "root", "", "base4");
	if ($mysql->connect_error)
		die("problemas con la conexion a la base de datos");


	$registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
	die($mysql->error);

	if ($reg = $registro->fetch_array()){
		$mysql->query("delete from rubros where codigo=$_REQUEST[codigo]") or
		die($mysql->error);
		echo '<center>La descripcion del rubro que se elimino es:'. $reg['descripcion'].'</center><br>';
	}else{
		echo '<center>No existe un rubro con dicho codigo</center>';
	}
	$mysql->close();
	?>
	<br>
	<table border="1" bgcolor="#52BE80" align="center">
		<tr>
			<td><a href="9borrado_rubros.html">
				<input type="button" value="Regresar">
			</a></td>

		</tr>
	</table>
</body>
</html>


