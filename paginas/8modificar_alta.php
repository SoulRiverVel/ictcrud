<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificacion de Rubros</title>
</head>
<body background="../img/Red Neon and Stones.jfif" style="color: white;">
    <h1 align="center">Modificacion de Rubros</h1>
    <?php
    $mysql = new mysqli("localhost", "root", "", "base4");
    if ($mysql -> connect_error)
        die("Problemas con la conexion a la base de datos");

    $mysql->query("update rubros set descripcion='$_REQUEST[descripcion]'where codigo=$_REQUEST[codigo]")
    or
        die($mysql->error);

    echo '<center>Se modifico la descripcion del rubro </center>';

    $mysql->close();
    ?>
    <br>
    <table border="1" bgcolor="#730E0E" align="center">
        <tr>
            <td><a href="6modificar_rubros.html">
            <input type="button" value="Regresar a modificar rubros"></a></td>
        </tr>
</body>
</html>

