<?php
    print"digite a quantidade de dias ";
    $dias = fgets(STDIN);
    print"digite a quantidade de horas ";
    $horas = fgets(STDIN);
    print"digite a quantidade de minutos ";
    $minutos = fgets(STDIN);
    print"digite a quantidade de segundos ";
    $segundos = fgets(STDIN);

    $diasemsec = $dias*86400;
    $horasemsec = $horas*3600;
    $minutosemsec = $minutos*60;

    $total = $diasemsec + $horasemsec + $minutosemsec + $segundosemsec;

     
     print"O total foi de $total segundos";