<?php

if (isset($_GET["id_mensaje"]) && isset($_GET["mensaje"])){
    session_start();
    if (isset($_SESSION["idusu"])){
        $idusu=$_SESSION["idusu"];
        $id_mensaje=$_GET["id_mensaje"];
        $mensaje=$_GET["mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("UPDATE mensajes SET mensaje='{$mensaje}' WHERE id_mensaje=$id_mensaje");
header('location:muro.php');
}
}
?>


