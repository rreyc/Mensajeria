<?php
    session_start();
    if ($_SESSION["estado"] != 1) {
            header('location:iniciar.php');
    }
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<h2>¿A quien desea buscar?</h2>
<form action="buscar.php" method="get">
    <label for="nombre">Por el nombre</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="apellido">Por primer apellido</label>
    <input type="text" id="apellido" name="apellido">
    <br>
    <label for="login">Por el login</label>
    <input type="text" id="login" name="login">
    <br>
    <button>Buscar</button>
</form>
<a href="muro.php">Volver al muro</a>
</body>
</html>