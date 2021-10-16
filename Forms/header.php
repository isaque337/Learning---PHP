<h1> CABEÇALHO</h1>


<?php

if(isset($_COOKIE['nome'])){
    $nome = $_COOKIE['nome'];
    echo "<h3>" . $nome . "</h3>";
}


?>

<hr>