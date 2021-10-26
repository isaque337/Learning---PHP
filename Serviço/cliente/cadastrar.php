<?php
require __DIR__ . './../vendor/autoload.php';

//Validação do formulário 

if(isset($_POST['nome'],$_POST['cpf'],$_POST['status'])){
    echo 'Cadastrar';
}else{
    echo'Não cadastrou';
}