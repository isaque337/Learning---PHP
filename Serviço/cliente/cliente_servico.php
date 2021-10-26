<?php
session_start();
require __DIR__ . './../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Cadastrar Serviço para Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR SERVIÇO</center>
            </div>
        </div>
    </div>

    <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form> -->







            <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>