<?php
session_start();
if($_SESSION['nome']){
    $_SESSION['nome'] = '';
    header("location: login.php");
    exit;
}else{
    $_SESSION['aviso2'] = 'Informe o nome';
    header("location: login.php");
    exit;
}
?>