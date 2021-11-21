<?php
require __DIR__ . './../vendor/autoload.php';
include __DIR__ . './../js/config.js';

use App\Entity\Cliente;

//Validação do formulário 
$nome_servico = filter_input(INPUT_POST, 'nome');

if (isset($_POST['nome'], $_POST['cpf'], $_POST['status']) && FILTER_VAR($_POST['cpf'], FILTER_VALIDATE_INT)) {
    $obCliente = new Cliente;
    $obCliente->nome = $_POST['nome'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->status = $_POST['status'];
    $obCliente->cadastrar();

    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='success' role='alert'>
                                <strong>Cliente cadastrado com sucesso!</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label=Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: cadastro.php?connection=success');
    exit;
}else{
    $_SESSION['erro'] = "<div class='alert alert-danger alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='error' role='alert'>
                                <strong>CPF inválido!&nbsp;</strong>Por favor, reescreva novamente.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: cadastro.php?validation=failed');
    
};