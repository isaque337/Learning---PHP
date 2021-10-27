<?php
require __DIR__ . './../vendor/autoload.php';

use App\Entity\Cliente;

//Validação do formulário 

if(isset($_POST['nome'],$_POST['cpf'],$_POST['status'])){
    $obCliente = new Cliente;
    $obCliente->nome=$_POST['nome'];
    $obCliente->cpf=$_POST['cpf'];
    $obCliente->status=$_POST['status'];
    $obCliente->cadastrar();


    
}
