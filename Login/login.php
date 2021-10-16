<?php
session_start();

?>
<form method="POST" action="recebe.php">

    <label>
        Qual o seu nome?
        <br>
        <input type="text" autocomplete="off" name="nome">
        <br>
    </label>

    <label>
        <input type="submit" value="Salvar">
    </label>


</form>