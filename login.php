<?php
if (isset($_POST["login"]) && isset($_POST["password"])){
    $login=$_POST["login"];
    $password=$_POST["password"];
    $mysqli=new mysqli("localhost","mensajeria","mensajeria","mensajeria");
    $resultado=$mysqli->query("SELECT * FROM usuarios");
    $fila=$resultado->fetch_assoc();
    while ($fila){
        if ($login==$fila["login"] && $password==$fila["password"]){
            session_start();
            $_SESSION["estado"]=1;
            $_SESSION["idusu"]=$fila["id"];
            header('location:muro.php');

        }else {
            echo "<p>Usuario o Contraseña incorrectos</p>";
        }
        $fila=$resultado->fetch_assoc();
    }
    if ($_SESSION["estado"]!=1){
        header('location:iniciar.php?error=2');
    }



}else {
    header('location:iniciar.php');
}

?>