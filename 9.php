<?php   
    
    print"Qual a area em m²\n";
    $area = fgets(STDIN);
    $litro = $area/6;
    $lata = ceil(($litro/18) *1.10);
    $galao = ceil(($litro/3.6) *1.10);
    $latas_compra = 80 * $lata;
    $galoes_compra = 25 * $galao;
    $melhor_lata = ceil($litro/18);
    $melhor_galao = ceil(($litro%18) /3.6);
    $melhor_compra_mista = ($melhor_lata*80) + ceil($melhor_galao * 25);

    print"Latas: {$lata} Latas no preço de  R$$latas_compra \n";
    print"Galoes: {$galao} Galôes no preço de R$$galoes_compra \n";
    print"Melhor compra: \n   Latas: {$melhor_lata} | Galôes: {$melhor_galao} || no preço de: R$$melhor_compra_mista \n";