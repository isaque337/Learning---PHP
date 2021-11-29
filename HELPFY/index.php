<?php
session_start();
require __DIR__ . './vendor/autoload.php';
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
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 h3">
                <center>Bem vindo ao HELPFY!</center>
                <p><small class="text-muted"></small>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12 h3">
            <center>
                <p><small class="text-muted">HelpFY é um intermeio entre sua casa limpa, roupa lavada e aquela comida caseira deliciosa.<br>
                        Procuramos unir pessoas que procura agilidade, eficiencia e confiabilidade nos afazeres domesticos.<br>
                        Estamos aqui pra te ajudar . Equipe FY</small>
            </center>
        </div>
    </div>
    </div>








    <?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>