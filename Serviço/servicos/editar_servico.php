<?php
session_start();
require __DIR__ . './../vendor/autoload.php';

define('TITLE','EDITAR CLIENTE');

use App\Entity\Cliente;

// Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ./../index.php?status=error');
    exit;  
}

//CONSULTA O CLIENTE
$obCliente = Cliente::getCliente($_GET['id']);

// Validação da vaga
if(!$obCliente instanceof Cliente){
    header('location: ./../index.php?status=error');
    exit;
}

//Validação do formulário 

if (isset($_POST['nome'], $_POST['cpf'], $_POST['status'])) {

    $obCliente->nome = $_POST['nome'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->status = $_POST['status'];
    echo "<pre>"; print_r($obCliente); echo "</pre>"; exit;
    // $obCliente->cadastrar();

    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show d-flex justify-content-center col-md-6 offset-md-3' id='success' role='alert'>
                                <strong>Cliente cadastrado com sucesso!</strong>
                                    <button type='button' class='close' data-dismiss='alert' aria-label=Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                            </div>";
    header('location: cadastro.php?connection=success');
    exit;
} 

include_once __DIR__ . '/cadastro.php';