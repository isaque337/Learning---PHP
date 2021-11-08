<?php
session_start();
require_once('../conexao.php');

//Colocar validação e sanitize
$nome_servico = FILTER_VAR('nome_servico', FILTER_SANITIZE_SPECIAL_CHARS);
$valor_servico = FILTER_VAR('valor_servico', FILTER_VALIDATE_FLOAT);

if($valor_serico!== true){

    header("location: cadastro.php");

};


//Inserção na tabela
if (isset($_POST[$nome_servic], $_POST[$valor_servico])) {
    $sql = $pdo->prepare("INSERT INTO servicos VALUES (null,null,?,?)");
    $sql->execute(array($_POST[$nome_servico],$_POST[$valor_servico]));
    header("location:cadastro.php");
}else{

    header("location:cadastro.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
?>