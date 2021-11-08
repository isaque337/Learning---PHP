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
    <title>Cadastrar Cliente</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>
    <?php

    // if (isset($_GET['erro'])) {
    //     echo 'deu erro <br>' . $_GET['erro'];
    // }

    ?>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>

    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR CLIENTE</center>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="alert alert-danger alert-dismissible fade" id="cpf" role="alert">
        <strong>Cpf inválido!</strong> Por favor, repita novamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

        <form action="cadastrar.php" method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome Completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="status" value="ativo" checked> Ativo
                            </label>
                    </div>

                    <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="status" value="inativo"> Inativo
                            </label>
                    </div>
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