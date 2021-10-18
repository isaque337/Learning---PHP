<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['nome'] = $nome;


if($_SESSION['nome']){
    header("location: index.php");
}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente';
    header("location: login.php");

}

