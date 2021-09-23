<?php

$tipo = 'video';

switch ($tipo) {
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