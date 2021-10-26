<?php
session_start();

if (isset($_SESSION['cadastrado'])) {
    echo "&nbsp;" . $_SESSION['cadastrado'];
    $_SESSION['cadastrado'] = '';
} else {
    echo $_SESSION['nao_cadastrado'];
    $_SESSION['nao_cadastrado'] = '';
}

if (isset($_SESSION['valor_corrompido'])) {
    echo $_SESSION['valor_corrompido'];
    $_SESSION['valor_corrompido'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Cadastrar Serviços</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>CADASTRAR SERVIÇOS</center>
            </div>
        </div>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oloco, meu!</strong> Olha esse alerta animado, como é chique!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="container">
        <form action="cadastrar.php" method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome </label>
                    <input type="text" name="nome_servico" class="form-control " placeholder="Digite o nome do serviço" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Valor</label>
                    <input type="text" name="valor_servico" class="form-control" placeholder="Digite o valor" required="" autocomplete="off">
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