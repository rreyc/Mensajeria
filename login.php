<?php
if (isset($_GET["login"]) && isset($_GET["password"])){
    $login=$_GET["login"];
    $password=$_GET["password"];
    $mysqli=new mysqli("localhost","root","","mensajeria");
    $resultado=$mysqli->query("SELECT * FROM usuarios");
    $fila=$resultado->fetch_assoc();
    while ($fila){
        if ($login==$fila["login"] && $password==$fila["password"]){
            session_start();
            $_SESSION["estado"]=1;
            header('location:muro.php');

        }else {
            echo "<p>Usuario o Contraseña incorrectos</p>";
        }
        $fila=$resultado->fetch_assoc();
    }
    if ($_SESSION["estado"]!=1){
        header('location:index.php?error=2');
    }
 
 
 
}else {
    header('location:index.php');
}

?>