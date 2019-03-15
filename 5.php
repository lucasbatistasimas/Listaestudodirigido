<?php
    print"Digite a distancia em km: ";
    $distancia = fgets(STDIN);
    print"Digite a velocidade media em km/h: ";
    $vm = fgets(STDIN);

    $tempo = $vm/ $distancia;

    print"O tempo de viagem foi de $tempo Horas\n\n";