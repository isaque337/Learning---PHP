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
        <?php
        if (isset($_GET['validation'])) {
            echo $_SESSION['erro'];
        } else if (isset($_GET['connection'])) {
            echo $_SESSION['success'];  
        } ?>
        <form action="cadastrar.php" method="POST">

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Nome Completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="Digite seu número" maxlength="12" required="">
                    
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu CPF" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Login</label>
                    <input type="text" name="login" class="form-control" placeholder="Digite seu login" required="" autocomplete="off">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Senha</label>
                    <input type="text" name="senha" class="form-control" placeholder="Digite sua senha" required="" autocomplete="off">
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