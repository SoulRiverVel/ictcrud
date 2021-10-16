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

    $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
        die($mysql->error);
        
    if ($reg = $registro->fetch_array()) {
    ?>
    <form method="post" action="8modificar_alta.php">
        <table border="1" bgcolor="#730E0E" align="center">
            <tr>
                <td>Descripcion del Rubro:</td>
                <td><input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion']; ?>">
                <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>"></td>
            </tr>
            <tr align="center">
            <td><a href="6modificar_rubros.html">
                <input type="button" value="Regresar"></a></td>
            <td>
                <input type="submit" value="Confirmar"></td>
            </tr>

        </table>
    </form>
    <?php
    } else
        echo '<center>No existe un rubro con dicho codigo</center>';
    
    $mysql->close();
    ?>
</body>
</html>

