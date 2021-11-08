<?php
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servico;

//Validação do formulário 

if (isset($_POST['nome_servico'], $_POST['valor_servico'], $_POST['status'])) {
    $obCliente = new Servico;
    $obCliente->nome = $_POST['nome'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->status = $_POST['status'];
    $obCliente->cadastrar();

    header('location: cadastro.php?status=success');
    exit;
};
