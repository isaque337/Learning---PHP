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
    <title>LOGIN</title>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/../includes/navbar.php'; ?>


    <br>
    <br>
    <div class="container">

        <div class="form-group">
            <div class="col-md-6 offset-md-3 h3">
                <center>LOGIN</center><br>
            </div>
        </div>
   
    <form action="cadastrar.php" method="POST">

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Login</label>
                <input type="text" name="login_teste" class="form-control" placeholder="Digite seu login" required="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Senha</label>
                <input type="password" name="email" class="form-control" placeholder="Digite a senha" required="" autocomplete="off">
            </div>
        </div>

        <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Enviar</button>
                </div>
            </div>
    </form>
    </div>
    </div>


    <?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>