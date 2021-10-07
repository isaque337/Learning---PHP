<?php
//Pequena réplica do facebook.

$tipoConteudo = 'video';

switch ($tipoConteudo) {
    case 'foto':
        echo 'Exibindo Foto';
        break;
    case 'video':
        echo 'Exibindo Vídeo';
        break;
    case 'texto':
        echo 'Exibindo Texto';
        break;
}