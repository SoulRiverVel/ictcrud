<!--Hecho por Soul (Alma Velasquez)-->
<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Artículos</title> 
</head> 
<body bgcolor="white">
    <h1 align="center">Consulta de Artículos</h1> 
    <?php
        $mysql = new mysqli("localhost", "root", "", "base4"); 
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

$registros = $mysql->query("select ar.descripcion as descripcionart, 
                                                precio,
                                                ru.descripcion as descripcionrub
                                                from articulos as ar inner
                                                join rubros as ru on ru.codigo=ar.codigocurso
                                                where ar.codigo=$_REQUEST[codigo]") or 
                                                
            die($mysql->error);

        if ($reg = $registros->fetch_array()) {
            echo '<center>Descripción:'.  $reg['descripcionart'] .'</center><br>'; 
            echo '<center>Precio:'. $reg['precio'] .'</center><br>';
            echo '<center>Rubro:' . $reg['descripcionrub'] . '</center><br>'; 
        } else
            echo '<center>No existe un artículo con dicho código</center>';

        $mysql->close();

        ?>
        <br>
        <table border="1" bgcolor="#F4D03f" align="center"> 
            <tr>
                <td><a href="13consulta_articulos.html">
                <input type="button" value="Regresar"></a></td> 
            </tr>
        </table> 
    </body> 
</html>

