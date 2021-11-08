<?php
session_start();
require_once('../../conexao.php');
$erro=0;
//Colocar validação e sanitize
if(empty($_POST['nome'])){
$erro=1;
$mensagem='Não tem nome <br>';
}
if(empty($_POST['cpf'])){
$erro=1;
$mensagem='Não tem cpf <br>';
}
$nome = FILTER_VAR($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = FILTER_VAR('cpf', FILTER_VALIDATE_INT);

if($erro==1){

    header("location:cadastro.php?mensagem=$mensagem");
}
//Inserção na tabela

if (isset($_POST['nome'], $_POST['cpf'])) {
    echo"entrou";
    $sql = $pdo->prepare("INSERT INTO cliente VALUES (null,?,?,?)");
    $sql->execute(array($_POST['nome'], $_POST['cpf'], $_POST['status']));

    $_SESSION['cadastrado'] = 'Inserido com sucesso';
    header("location:cadastro.php");
}else{
    $_SESSION['nao_cadastrado'] = 'Não foi possível realizar o cadastro';
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // header("location:cadastro.php");

  
}
?>

