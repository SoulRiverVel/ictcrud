<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<META HTTP-ESQUIV= "REFRESH" CONTENT="10; URL=15borrado_articulos.html">
	<title>Borrado de Articulos</title>
</head>
<body bgcolor="white">
	<h1 align="center">Borrado de Articulos</h1>
	<?php
	$mysql= new mysqli("localhost", "root", "", "base4");
	if ($mysql->connect_error)
		die("Problemas con la conexion a la base de datos");

	$registro = $mysql->query("select descripcion from articulos where codigo=$_REQUEST[codigo]")or
	die($mysql->error);

	if ($reg = $registro->fetch_array()) {
		$mysql->query("delete from articulos where codigo=$_REQUEST[codigo]")or
		die($mysql->error);
		echo '<center>La desripcion del articulo que se elimino es: '. $reg['descripcion'].'</center>';
	}else 
	echo '<center>No existe un articulo con dicho codigo</center>';
	$mysql->close();
	?>
	<br>
	<table border="1" bgcolor="#AA45F4" align="center">
		<tr>
			<td><a href="15borrado_articulos.html">
				<input type="button" value="Rgresar">
			</a></td>
		</tr>
	</table>
</body>
</html>
