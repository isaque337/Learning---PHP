<?php
session_start();
require_once("../conexao.php");



if (isset($_POST['nome_servico'])) {
    $sql = $pdo->prepare("INSERT INTO servicos VALUES (null,null,?,?)");
    $sql->execute(array($_POST['nome_servico'],$_POST['valor_servico']));
    $_SESSION['cadastrado'] = 'Inserido com sucesso';
    header("location:cadastro.php");
}else{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>