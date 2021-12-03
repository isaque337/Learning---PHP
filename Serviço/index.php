<?php
session_start();
require __DIR__ . './vendor/autoload.php';
use app\Entity\Cliente;
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>INÍCIO</title>
    <?php include_once __DIR__ . '/includes/header.php'; ?>

</head>

<body>

    <?php include_once __DIR__ . '/includes/navbar.php'; ?>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-12 h3">
                <center>Bem vindo ao Brasil Cad!</center>
                <p><small class="text-muted"></small>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 h3">
                <center>
                    <p><small class="text-muted">Texto de Boas vindas!</small>
                </center>
            </div>
        </div>
    </div>

    <?php
        $cliente = Cliente::getClientes();
    ?>

    <div class="container">
        <!-- <div class ="row">
            <div class ="col-md-6 of"> -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 700px;" src="img/cadastro.jpg" alt="Primeiro Slide">
                    <div class="carousel-caption d-none d-md-block" style="color: black">
                        <h5>Realizamos cadastro de clientes e seus respectivos serviços</h5>
                        <p>Texto do primeiro slide</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 700px;" src="img/veiculo.jpg" alt="Segundo Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Título do segundo slide</h5>
                        <p>Texto do segundo slide</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 700px;" src="img/servico.jpg" alt="Terceiro Slide">
                    <div class="carousel-caption d-none d-md-block" style="color: black">
                        <h5>Título do terceiro slide</h5>
                        <p>Texto do terceiro slide</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>
    <!-- </div>
    </div> -->





    <?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>