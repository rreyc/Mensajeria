<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<div>
    <a href="nuevo.php">Escribir Mensaje</a>

    <?php
    session_start();
    if (isset($_SESSION["idusu"])){
        $idusu=$_SESSION["idusu"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("SELECT * FROM mensajes WHERE id_usuario=$idusu");
        $fila= $resultado->fetch_assoc();

        if ($fila==NULL){
            echo "<p>Todavia no has escrito ningun mensaje</p>";
        }else {
            while ($fila){
                $id_mensaje=$fila["id_mensaje"];
                echo "<div id=\"zonamensaje\">";
                echo "<p>{$fila["mensaje"]}</p>";
                echo "<a href="."modificado.php?id_mensaje={$id_mensaje}>Modificar</a>";
                echo "<a href="."borrado.php?id_mensaje={$id_mensaje}>Borrar</a>";
                echo "</div>";
                $fila=$resultado->fetch_assoc();
            }
        }
    }else {
        if ($_SESSION["estado"]!=1){
            header('location:iniciar.php');
        }
    }
    ?>

</div>
</body>
</html>