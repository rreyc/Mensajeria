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
<h2>Inserte el texto que desee añadir</h2>
<form action="anadir.php" method="post">
    <textarea name="mensaje" id="mensaje" required placeholder="Escriba aqui" cols="30" rows="10"></textarea>
    <br>
    <button>Enviar</button> &nbsp;&nbsp;&nbsp;&nbsp;<button href="muro.php">Volver a tu muro</button>
</form>
</body>
</html>