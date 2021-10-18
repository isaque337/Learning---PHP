<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    $expiracao = time() + (86400 * 3);
    setCookie('nome', $nome, $expiracao);
    header("index.php");
}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente';
    header("location: login.php");

}

