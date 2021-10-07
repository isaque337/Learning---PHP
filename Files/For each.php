<?php

$ingredientes = [
    'açucar',
    'massa',
    'trigo',
    'ovos', 
    'leite',
    'chocolate',
    'nutella'

];

echo '<h2>Ingredientes<br></h2>';

foreach($ingredientes as $chave => $ingrediente){
 
    echo "Item ".($chave + 1) .": ". $ingrediente . "<br>";
}