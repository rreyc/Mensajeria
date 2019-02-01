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
<h2>Resultados</h2>
<?php
if (isset($_GET["nombre"]) || isset($_GET["apellido"]) || $_GET["login"]){
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $login=$_GET["login"];
    $mysqli = new mysqli("localhost", "root", "", "mensajeria");
    $resultado=$mysqli->query("SELECT * FROM usuarios");
    $fila=$resultado->fetch_assoc();
    
    if ($nombre!=$fila["nombre"] || $apellido!=$fila["apellido1"] || $login!=$fila["login"]){
        echo "<p>No hay coincidencias</p>";
        echo "<br>";
        echo "<a href='buscador.php'>Volver a intentar</a>";
    }
    while($fila){
       $id_usuario=$fila["id"];
       if ($nombre==$fila["nombre"] || $apellido==$fila["apellido1"] || $login==$fila["login"]){

            echo "<a href='muroinvitado.php?id=$id_usuario'><p>Ver el muro de  {$fila["nombre"]} {$fila["apellido1"]}</p></a>";
            echo "<br>";
        }
       $fila=$resultado->fetch_assoc();
    }
}
else{
    header('location:index.php');
}
?>
</body>
</html>