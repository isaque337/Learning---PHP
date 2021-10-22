<?php
session_start();
require_once('../conexao.php');

//Colocar validação e sanitize
$nome_servico = FILTER_VAR('nome_servico', FILTER_SANITIZE_SPECIAL_CHARS);
$valor_servico = FILTER_VAR('valor_servico', FILTER_VALIDATE_FLOAT);

if($valor_serico!== true){
    $_SESSION['valor_corrompido'] = 'Insira o valor corretamente';
    header("location: cadastro.php");

};


//Inserção na tabela
if (isset($_POST[$nome_servic], $_POST[$valor_servico])) {
    $sql = $pdo->prepare("INSERT INTO servicos VALUES (null,null,?,?)");
    $sql->execute(array($_POST[$nome_servico],$_POST[$valor_servico]));
    $_SESSION['cadastrado'] = 'Inserido com sucesso';
    header("location:cadastro.php");
}else{
    $_SESSION['nao_cadastrado'] = 'Não foi possível realizar o cadastro';
    header("location:cadastro.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'erro';
    // exit;
  
}
