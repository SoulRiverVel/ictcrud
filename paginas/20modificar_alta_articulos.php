<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Artículos</title>
</head>
<body bgcolor="white">
        <h1 align="center">Modificar Articulos</h1>

<?php
    $mysql = new mysqli("localhost", "root", "", "base4");
    if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");

    $mysql->query("update articulos set
                                descripcion='$_REQUEST[descripcion]',
                                precio=$_REQUEST[precio],
                                codigocurso=$_REQUEST[codigocurso]
                where codigo=$_REQUEST[codigo]") or
    die($mysql->error);

echo '<center>Se modificaron los datos del artículo</center>';

$mysql->close();
?>
<br>
<br>
		<table border="1" bgcolor="#AA45F4" align="center">
			<tr align="center">
			<td>
				<a href="11alta_articulos.php">
				<input type="button" value="Alta de Artículos"></a>
			</td>
				<td><a href="13consulta_articulos.html">
					<input type="button" value="Consulta de Artículos"></a></td>
			</tr>
			<tr align="center">
				<td>
				<a href="15borrado_articulos.html">
				<input type="button" value="Borrado de Artículos"></a>
			</td>
				<td><a href="171istado_articulos.php">
					<input type="button" value="Listado de Artículos"></a></td>
			</tr>
	</table>
</body>
</html>

