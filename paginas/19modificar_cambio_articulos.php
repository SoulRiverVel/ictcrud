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

$registro = $mysql->query("select descripcion,
									precio,
									codigocurso
								from articulos where codigo=$_REQUEST[codigo]") or
		die($mysql->error);

	if ($reg = $registro->fetch_array()) {
	?>
	<form method="post" action="20modificar_alta_articulos.php">
		<table border="1" bgcolor="#AA45F4" align="center">
		<tr>
			<td>Descripción del artículo: </td>
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

			$registros2 = $mysql->query("select codigo,descripcion from rubros") or
				die($mysql->error);
			while ($reg2 = $registros2->fetch_array()) {
					if ($reg2['codigo'] == $reg['codigocurso'])
						echo "<option value=\"" . $reg2['codigo'] . "\" selected>" . $reg2['descripcion'] . "</option>";
					else
						echo "<option value=\"" . $reg2['codigo']."\">" . $reg2['descripcion'] . "</option>";
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
        <br>
			<table border="1" bgcolor="#AA45F4" align="center">
				<tr align="center">
				<td>
					<a href="llalta_articulos.php">
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

