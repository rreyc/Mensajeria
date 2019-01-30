<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Complete sus datos de registro</h1>
<form action="registrar.php" method="post">
    <label for="nombre">Nombre:    </label>
    <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
    <br>
    <label for="apellido1">Apellido 1:</label>
    <input type="text" id="apellido1" name="apellido1" required placeholder="Apellido 1">
    <br>
    <label for="apellido2">Apellido 2:</label>
    <input type="text" id="apellido2" name="apellido2" placeholder="Apellido 2(Opcional)">
    <br>
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required placeholder="Login">
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required placeholder="Contraseña">
    <br>
    <label for="password2">Confirmacion:</label>
    <input type="password" id="password2" name="password2" required placeholder="Repite la contraseña">
    <br>
    <button>Enviar</button>
</form>
<?php
if(isset($_GET["error"])){
    $error=$_GET["error"];
    if ($error==1){
        echo "<p class='error'>Las contraseñas no coinciden</p>";
    }
}
?>
</body>
</html>