<?php
session_start();

if (isset($_SESSION['nome'])) {
    echo" Olá ". $_SESSION['nome'] . " - <a href='apaga.php'>Sair</a>";
}else{
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-Vindo!</title>
    </head>
    <body>

    </body>

</html>