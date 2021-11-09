<?php
require __DIR__ . './../vendor/autoload.php';


use App\Entity\Cliente;

//Validação do formulário 
$nome = filter_input(INPUT_POST, 'nome');

if (isset($_POST['nome'], $_POST['cpf'], $_POST['status']) && FILTER_VAR($_POST['cpf'], FILTER_VALIDATE_INT)) {
    $obCliente = new Cliente;
    $obCliente->nome = $_POST['nome'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->status = $_POST['status'];
    $obCliente->cadastrar();

    header('location: cadastro.php?status=success');
    exit;
} else {
    header('location: cadastro.php?status=failed');
    echo '<script>
                window.onload = function(){ alert("ok") };
          </script>';

          exit;
};

