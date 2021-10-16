<?php
session_start();
include ('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';

}


?>

<a href="apagar.php">Apagar Cookie</a>

<form method="POST" action="recebe.php">

    <label>
        Nome: 
        <br>
        <input type="text" name="nome" autocomplete="off">
    </label>
    <br>
    <br>

    <label>
        Email:
        <br>
        <input type="text" name="email" autocomplete="off">
        <br>
        <br>
    </label>

    <label>
        Idade:
        <br>
        <input type="text" name="idade" autocomplete="off">
        <br>
        <br>
    </label>


    <input type="submit" value="Enviar">

</form>