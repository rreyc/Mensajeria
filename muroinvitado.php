<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
<div>
    <?php
    session_start();
    if (isset($_GET["id"])){
        $id_usuario=$_GET["id"];
        $mysqli=new mysqli("localhost","root","","mensajeria");
        $resultado=$mysqli->query("SELECT * FROM mensajes m,usuarios u WHERE m.id_usuario=$id_usuario AND m.id_usuario=u.id;");
        $fila= $resultado->fetch_assoc();

        if ($fila==NULL){
            echo "<p>Todavia no has escrito ningun mensaje</p>";
        }else {
            while ($fila){
                $id_mensaje=$fila["id_mensaje"];
                echo "<div id=\"zonamensaje\">";
                echo "<p>{$fila["mensaje"]}</p>";

                echo "</div>";
                $fila=$resultado->fetch_assoc();
            }
        }
    }else {
        if ($_SESSION["estado"]!=1){
            header('location:iniciar.php');
        }
    }
    ?>

</div>
<div id="buscador">
    <h3>¿Quieres encontrar a otra persona?</h3>
    <form action="buscador.php">
        <button>Buscar</button>
    </form>
    <?php
    echo "<a href='muro.php?{$_SESSION["id_usuario"]}'>Volver a tu muro</a>";
    ?>
</div>
</body>
</html>