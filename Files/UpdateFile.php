<?php
$texto = 'Isaque Almeida';
$texto .= ' está apredendo a programar o básico de PHP';

file_put_contents('nome.txt', $texto);

echo'Arquivo editado com sucesso!';