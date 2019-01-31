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
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="login">Usuario</label>
        <input type="text" name="login" id="login" placeholder="Usuario">
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña">
        <br>
        <button>Entrar</button>
    </form>
    <?php
    if(isset($_GET["error"])){
        $error=$_GET["error"];
        if ($error==2){
            echo "<p class='error'>Usuario o contraseña incorrecta</p>";
        }
    }
    ?>
</div>
</body>
</html>