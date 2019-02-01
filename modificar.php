<?php

if (isset($_POST["id_mensaje"]) && isset($_POST["mensaje"])){
    session_start();
    if (isset($_SESSION["id_usuario"])){
        $id_usuario=$_SESSION["id_usuario"];
        $id_mensaje=$_POST["id_mensaje"];
        $mensaje=$_POST["mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("UPDATE mensajes SET mensaje='{$mensaje}' WHERE id_mensaje=$id_mensaje");
        header('location:muro.php');
    }
}
?>
