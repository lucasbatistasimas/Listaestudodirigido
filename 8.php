<?php   


    print "Quantos cigarros você fuma por dia:\n";
    $cigarros_por_dia = fgets(STDIN);

    print "Quantos anos você fuma:\n";
    $anos_fumados     = fgets(STDIN);


    $cigarros_fumados = $cigarros_por_dia*365*$anos_fumados;
    $minutos_perdidos = $cigarros_fumados *11;
    $horas_perdidas   = $minutos_perdidos /60;
    $dias_perdidos    = round($horas_perdidas /24);

    print "\nVocẽ perdeu $dias_perdidos dias de vida!\n";
    print "\nVocê perdeu $minutos_perdidos minutos por dia!\n\n\n";