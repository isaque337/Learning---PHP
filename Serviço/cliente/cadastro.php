<?php
session_start();

if (isset($_SESSION['cadastrado'])) {
    echo "&nbsp;" . $_SESSION['cadastrado'];
    $_SESSION['cadastrado'] = '';
} else {
    echo isset($_SESSION['nao_cadastrado']);
    $_SESSION['nao_cadastrado'] = '';
}

?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Cadastrar Cliente</title>
    <?php include_once('../header.php'); ?>
    
</head>

<body>

    <?php include_once('../navbar.php'); ?>
    
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR CLIENTE</center>
            </div>
        </div>
    </div>

    <div class="container">

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
                    <input type="hidden" name="status" class="form-control" value="ativo">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>


    <?php require_once("../footer.php"); ?>
</body>