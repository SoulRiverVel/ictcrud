<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alta de artículos</title> 
</head> 
<body bgcolor="white">
    <h1 align="center">Alta de artículos</h1> 
    <form action="26panel_agregar_alta.php" method="post"> 
    <table border="1" bgcolor="#D2B4DE" align="center"> 
    <tr>
        <td>Ingrese descripcion del artículo: </td>
        <td><input type="text" name="descripcion" required></td> 
    </tr> 
    <tr>
        <td>Ingrese precio: </td>
        <td><input type="text" name="precio" required></td> 
    </tr> 
    <tr>
        <td>Seleccione rubro:</td> 
        <td><select name="codigocurso"> 
        <?php 
        $mysql = new mysqli("localhost", "root", "", "base4"); 
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

        $registros = $mysql->query("select codigo, descripcion from rubros") or
            die($mysql->error); 
        while ($reg = $registros->fetch_array()) {
            echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['descripcion'] . "</option>";
        }
        ?>
        </select></td> 
        </tr> 
        <tr align="center">
            <td colspan="2">
            <input type="submit" value="Confirmar"></td> 
        </tr>
            </table> 
        </form>
    </body>
</html>

