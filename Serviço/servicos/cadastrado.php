<?php

    if(!isset($_SESSION)){ 
        session_start(); 
    }
    else{
        session_destroy();
        session_start(); 
    };

require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servicos;

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Editar Serviços</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>

    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>EDITAR SERVIÇOS</center>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        if (isset($_GET['validation'])) {
            echo $_SESSION['erroCpf'];
        } else if (isset($_GET['connection'])) {
            echo $_SESSION['success'];
        } ?>
        <form method="POST">

        <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome </label>
                    <input type="text" name="nome_servico" class="form-control " placeholder="Digite o nome do serviço" required="" autocomplete="off" value="<?=$obServico->nome_servico?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Valor</label>
                    <input type="text" maxlength="9" name="valor_servico" id="valor" class="form-control" onkeyup="formatarMoeda()" placeholder="Digite o valor" required="" autocomplete="off"value="<?=$obServico->valor_servico?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>


    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>