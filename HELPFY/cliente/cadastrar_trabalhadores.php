<?php
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Trabalhadores;

//Validação do formulário 

if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['cpf'], $_POST['login'], $_POST['senha']))  {
    $obCliente = new Trabalhadores;
    $obCliente->nome = $_POST['nome'];
    $obCliente->email = $_POST['email'];
    $obCliente->telefone = $_POST['telefone'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->sexo = $_POST['sexo'];
    $obCliente->cep = $_POST['cep'];
    $obCliente->numero_casa = $_POST['numero_casa'];
    $obCliente->complemento = $_POST['complemento'];
    $obCliente->cidade_prefe = $_POST['cidade_prefe'];
    $obCliente->refe_anteriores = $_POST['refe_anteriores'];
    $obCliente->exp_prof = $_POST['exp_prof'];
    $obCliente->oferto = $_POST['oferto'];
    $obCliente->valor_min = $_POST['valor_min'];
    $obCliente->data = $_POST['data'];
    $obCliente->login = $_POST['login'];
    $obCliente->senha = $_POST['senha'];
    $obCliente->cadastrar();

    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='success' role='alert'>
                                <strong>Cliente cadastrado com sucesso!</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label=Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: cad_trabalhadores.php?connection=success');
    exit;
}else{
    $_SESSION['erro'] = "<div class='alert alert-danger alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='error' role='alert'>
                                <strong>Campos inválidos!&nbsp;</strong>Por favor, reescreva novamente.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
                        
    header('location: cadastro.php?validation=failed');
    
};