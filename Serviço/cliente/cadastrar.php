<?php
session_start();
require_once('../conexao.php');

//Colocar validação e sanitize
$nome = FILTER_VAR('nome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = FILTER_VAR('cpf', FILTER_VALIDATE_INT);


//Inserção na tabela
if (isset($_POST[$nome], $_POST[$cpf], $_POST['status'])) {
    $sql = $pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?)");
    $sql->execute(array($_POST[$nome], $_POST[$cpf], $_POST['status']));

    $_SESSION['cadastrado'] = 'Inserido com sucesso';
    header("location:cadastro.php");
}else{
    $_SESSION['nao_cadastrado'] = 'Não foi possível realizar o cadastro';
    header("location:cadastro.php");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'erro';
    // exit;
  
}
?>

