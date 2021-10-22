<?php
session_start();
require_once('../header.php');

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

<head>
    <title>Cadastrar Serviço</title>
</head>


<br>
<div class="container">

    <div class="form-group">
        <div class="col-md-6 offset-md-3 h3">
            <center>CADASTRAR SERVIÇOS</center>
        </div>
    </div>
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



<?php require_once("../footer.php"); ?>