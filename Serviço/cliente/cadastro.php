<?php require_once("../header.php"); ?>
<head>
    <title>Cadastrar Cliente</title>
</head>

<br>
<div class="container">

    <div class="form-group">
        <div class="col-md-6 offset-md-3 h3">
            <center>CADASTRAR CLIENTE</center>
        </div>
    </div>
</div>

<div class="container">

    <form action="" method="POST" name="formulario">

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