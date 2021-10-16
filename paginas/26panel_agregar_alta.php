<!--Hecho por Soul (Alma Velasquez)-->
<?php
    $mysql=new mysqli("localhost", "root", "", "base4");
    if ($mysql->connect_error)
        die("Problemas con la conexion a la base de datos");

    $mysql->query("insert into articulos(descripcion,precio,codigocurso)
            values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigocurso])") or 
        die($mysql->error);

    $mysql->close();

    header('Location:21panel_listado.php');
    ?>



