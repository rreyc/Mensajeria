<?php
if (isset($_POST["mensaje"])){
    session_start();
    if (isset($_SESSION["id_usuario"])){
        $id_usuario=$_SESSION["id_usuario"];
        $mensaje=$_POST["mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("INSERT INTO mensajes VALUES (NULL,'$mensaje','$id_usuario')");
        header('location:muro.php');
    }
}else {
    if ($_SESSION["estado"]!=1){
        header('location:iniciar.php');
    }
}
?>

