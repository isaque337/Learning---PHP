<?php
$idade = '45';
$idade2 = '20';

if ($idade > 18) {
    echo "É maior.";
} else {
    echo "É menor.";
}

$total = isset($idade2) ? $idade2 : 'Não tem';
echo $total;
