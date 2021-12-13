<?php
session_start();
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Servico;

// Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ./../index.php?status=error');
    exit;  
}

//CONSULTA O CLIENTE
$obServico = Servico::getServico($_GET['id']);

// Validação da vaga
if(!$obServico instanceof Servico){
    header('location: ./../index.php?status=error');
    exit;
}

//Validação do formulário 

if (isset($_POST['nome_servico'], $_POST['valor_servico']) && $_POST['valor_servico']!==0) {

    $obServico->nome_servico = $_POST['nome_servico'];
    $obServico->valor_servico = $_POST['valor_servico'];
    $obServico->atualizar();

    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='success' role='alert'>
                                <strong>Cliente editado com sucesso!</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label=Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: gerenciar.php?connection=success');
    exit;
} 

include_once __DIR__ . '/cadastrado.php';