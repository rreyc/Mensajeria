<?php
if (isset($_POST["mensaje"])){
    session_start();
    if (isset($_SESSION["idusu"])){
        $idusu=$_SESSION["idusu"];
        $mensaje=$_POST["mensaje"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("INSERT INTO mensajes VALUES (NULL,'$mensaje','$idusu')");
        header('location:muro.php');
    }
}else {
    if ($_SESSION["estado"]!=1){
        header('location:iniciar.php');
    }
}
?>

