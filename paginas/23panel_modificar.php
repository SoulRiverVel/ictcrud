<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel principal</title>
</head>
<body bgcolor="white">
	<h1 align="center">Panel de mantenimiento</h1>
<?php
	$mysql = new mysqli("localhost", "root", "", "base4");
	if ($mysql->connect_error)
	die("Problemas con la conexión a la base de datos");
	
	$registro = $mysql->query("select   descripcion,
									    precio,
										codigocurso
									from articulos where codigo=$_REQUEST[codigo]") or
									
die($mysql->error);

if ($reg = $registro->fetch_array()) {
	?>
		<form method="post" action="24panel_modificar_alta.php">
			<table border="1" bgcolor="#D2B4DE  " align="center">
				<tr>
		<td>Descripción del artículo:</td>
		<td><input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion']; ?>"></td>
			</tr>
			<tr>
		<td>Precio: </td>
		<td><input type="text" name="precio" size="10" value="<?php echo $reg['precio']; ?>"></td>
			</tr>
			<tr>
		<td>Rubro:</td>
		<td><select name="codigocurso">

	<?php
		$registros2 = $mysql->query("select codigo, descripcion from rubros") or
			die($mysql->error);
		while ($reg2 = $registros2->fetch_array()) {
			if ($reg2['codigo'] == $reg['codigocurso'])

		echo "<option value=\"" . $reg2['codigo'] . "\" selected>". $reg2['descripcion'] . "</option>";
	else
		echo "<option value=\"" . $reg2['codigo'] . "\">" . $reg2['descripcion'] . "</option>";
}

	?>
    </select>
	    <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>"> </td>
	</tr>
	    <tr align="center">
		<td colspan="2"><input type="submit" value="Confirmar"></td>
	</tr>
	</table>
</form>
<?php
} else
	echo '<center>No existe un artículo con dicho código</center>';

$mysql->close();

?>
</body>
</html>


