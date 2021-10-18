<?php

$texto = file_get_contents('text.txt');
$texto = explode("/n", $texto);

print_r($texto);
echo "<br><br>LINHAS: " . count($texto);