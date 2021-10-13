<?php
// O PHP e o JS começam a contagem de tempo em 01/01/1970;

echo time()." <b>:Tempo em Milisegundos.</b>"."<br><br>"; //Tempo em Milisegundos;

echo date('d/m/Y H:i:s')." <b>:Dia, mês, ano // Tempo em Horas, minutos e segundos.</b>"."<br><br>"; //dia, mês e ano. Hora, minuto, e segundo. Favor olhar as variações na documentação Date.php

//Formatando data do formato internacional:

$data = '2021-04-02';

echo $data . "&nbsp;&nbsp;&nbsp;&nbsp;<= <b>Formato Internacional</b>&nbsp;&nbsp;&nbsp;";

$time = strtotime($data); //Conversão da data em tempo;

echo date ('d/m/Y', $time) . "<b>&nbsp;&nbsp;&nbsp;<=Formato BR</b>"; //Apresentando a data escolhendo o dia. 

