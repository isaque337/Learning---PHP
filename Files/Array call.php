<?php
$lista = [
    'nome'=> 'Isaque',
    'idade'=> 19,
    'atributos'=> [
        'força'=> 46,
        'agilidade'=> 80,
        'destreza'=> 50
    ], 
    'vida' => 1000,
    'mana' => 928 
];

echo "NOME:".$lista['nome']."<br/>";
echo "FORÇA:".$lista['atributos']['força']."<br/>";
echo "VIDA:".$lista['vida'];