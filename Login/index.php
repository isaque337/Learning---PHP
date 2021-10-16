<?php
session_start();

if(isset($_COOKIE['nome'])){
    header("Location: index.php");
}else{
    header("Location: login.php");
}

?>

<label>
    Olá <?php echo $_SESSION['nome']; ?> - <a href="apaga.php">Sair</a> 
</label>

