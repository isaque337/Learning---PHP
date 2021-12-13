<?php

    if(!isset($_SESSION)){ 
        session_start(); 
    }
    else{
        session_destroy();
        session_start(); 
    };

require __DIR__ . './../vendor/autoload.php';

use App\Entity\Cliente;

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Excluir Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>

    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>EXCLUIR CLIENTE</center>
            </div>
        </div>
    </div>

    <div class="container">

        <form method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <p>Você deseja realmente excluir o Cliente <strong><?=$obCliente->nome?></strong>?</p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <a href="./gerenciar.php">
                        <button type="button" class="btn btn-success">Cancelar</button>
                    </a>

                    <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>

                </div>
            </div>

          
        </form>
    </div>


    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>