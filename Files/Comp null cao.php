<?php
$idade = "18";
$cnh = null;

echo "Idade digitada: ". $idade ."// ";

if ($idade >= 18) {
    echo "É maior de idade. <br>";
}else{
    echo "É menor de idade . <br>";
}

$CNH = $cnh ?? "Não tem CNH";
echo $CNH;

