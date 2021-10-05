<?php
$lista = [
    'nome' => 'Isaque',
    'idade' => 19,
    'atributos' => [
        'força' => 46,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'fome'=> 200,
    'vida' => 1000,
    'comida' => 928
];

echo "NOME:" . $lista['nome'] . "<br/>";
if ($lista['nome'] == "Isaque"){
    echo "Your life is: " . $lista['vida']. "<br>";
}
echo "FORÇA:" . $lista['atributos']['força'] . "<br/>";
echo "VIDA:" . $lista['vida'] . "<br>";
echo "A fome é: ". $lista['fome'];
