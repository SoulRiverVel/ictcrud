<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel principal</title>
	<style>
	.tablalistado {
		border-collapse: collapse;
		box-shadow: 0px 0px 8px #000;
		margin:20px;
		margin: auto;
}
	.tablalistado th {
		border: 1px solid #000;
		padding: 5px;
		background-color:#FF0EAF;
}
    .tablalistado td{
		border: 1px solid #000;
		padding: 5px;
		background-color:#D2B4DE;
}
	</style>
	</head>
<body bgcolor="white">
	<h1 align="center">Panel de mantenimiento</h1>
<?php
$mysql= new mysqli("localhost","root","","base4");
if ($mysql->connect_error)
	die("Problemas con la conexión a la base de datos");

$registros=$mysql->query("select        ar.codigo as codigoart,
									    ar.descripcion as descripcionart,
										precio,
										ru.descripcion as descripcionrub
									from articulos as ar
									inner join rubros as ru on ru.codigo=ar.codigocurso") or
die($mysql->error);

echo '<table class="tablalistado" align="center">';
echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th>
<th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';

while ($reg=$registros->fetch_array())
{
    echo '<tr>';
    echo '<td>';
    echo $reg['codigoart'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionart'];
    echo '</td>';
    echo '<td>';
    echo $reg['precio'];
    echo '</td>';
    echo '<td>';
    echo $reg['descripcionrub'];
    echo '</td>';
    echo '<td>';
    echo '<a href="22panel_baja.php?codigo='. $reg['codigoart'].'">Borrar?</a>';
    echo '</td>';
    echo '<td>';
    echo '<a href="23panel_modificar.php?codigo='. $reg['codigoart'].'">Modificar?</a>';
    echo '</td>';
    echo '</tr>';
}
    echo '<tr><td colspan="6">';
    echo '<a href="25panel_agregar.php">Agregar un nuevo artículo?</a>';
    '</td></tr>';
    echo '<table>';

$mysql->Close();
?>
</body>
</html>




