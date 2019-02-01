<?php
session_start();
if (isset($_SESSION["idusu"])) {
    $idusu = $_SESSION["idusu"];
}else {
    if ($_SESSION["estado"]!=1){
        header('location:iniciar.php');
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
<h2>¿Seguro que desea borrar el mensaje?</h2>

    <?php
    if (isset($_GET["id_mensaje"])){
        $id_mensaje=$_GET["id_mensaje"];
    }
    echo "<a href=borrar.php?id_mensaje=$id_mensaje>Confirmar</a> &nbsp;&nbsp;&nbsp;&nbsp;<button href=muro.php>Cancelar</button>";
    ?>


</body>
</html>