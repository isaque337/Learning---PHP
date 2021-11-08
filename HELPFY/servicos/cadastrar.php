<?php
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servico;

//Validação do formulário 

if (isset($_POST['nome_servico'], $_POST['valor_servico'])) {
    $obServico = new Servico;
    $obServico->nome_servico = $_POST['nome_servico'];
    $obServico->valor_servico = $_POST['valor_servico'];
    $obServico->cadastrar();

    header('location: cadastro.php?status=success');
    exit;
};
//

//