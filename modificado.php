<?php
session_start();
if (isset($_SESSION["idusu"])) {
    $idusu = $_SESSION["idusu"];
}else {
    if ($_SESSION["estado"]!=1){
        header('location:muro.php');
    }
}
?>
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
<h2>Modifique su mensaje</h2>
<form action="modificar.php" method="post">
    <?php
    if (isset($_GET["id_mensaje"])){
        $id_mensaje=$_GET["id_mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("SELECT * FROM mensajes WHERE id_mensaje=$id_mensaje");
        $fila= $resultado->fetch_assoc();
        echo "<textarea name='mensaje' id='mensaje' required  cols=\"30\" rows=\"10\">{$fila["mensaje"]}</textarea>";
    } else {
        if ($id_mensaje==NULL){
            header('location:muro.php');
        }
    }
    echo "<input type='hidden' name='id_mensaje' id='id_mensaje' value='$id_mensaje'>";
    echo "<br>";
    echo "<button href=modificar.php>Modificar</button> &nbsp;&nbsp;&nbsp;&nbsp;<a href=muro.php>Cancelar</a>";
    ?>

</form>
</body>
</html>