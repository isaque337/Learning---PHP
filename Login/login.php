<?php
session_start();
if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

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