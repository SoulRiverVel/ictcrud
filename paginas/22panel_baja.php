<!--Hecho por Soul (Alma Velasquez)-->
<?php
	$mysql=new mysqli("localhost", "root","","base4");
	if ($mysql->connect_error)
		die("Problemas con la conexión a la base de datos");

$mysql->query("delete from articulos where codigo=$_REQUEST[codigo]") or
die($mysql->error);

$mysql->close();
header('Location:21panel_listado.php');
?>

