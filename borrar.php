<?php
if (isset($_GET["id_mensaje"])){
    session_start();
    if (isset($_SESSION["id_usuario"])){
        $id_usuario=$_SESSION["id_usuario"];
        $id_mensaje=$_GET["id_mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("DELETE FROM mensajes WHERE id_mensaje=$id_mensaje");
        header('location:muro.php');
    }
}
?>

