<?php
if (isset($_POST["nombre"]) && isset($_POST["apellido1"]) && isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["password2"])){
    $nombre=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $login=$_POST["login"];
    $password=$_POST["password"];
    $password2=$_POST["password2"];
    if ($password==$password2){
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $insertar=$mysqli->query("INSERT INTO usuarios VALUES ('','$nombre','$apellido1','$apellido2','$login','$password')");
        header('location:muro.php');
    }else{
        header('location:registro.php?error=1');
    }
}else{
    header('location:registro.php');

}



?>