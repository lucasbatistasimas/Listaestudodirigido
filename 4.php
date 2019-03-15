<?php
    print"Digite o preço da mercadoria: ";
    $preço_mercadoria = fgets(STDIN);
    print"Digite o percentual de desconto: ";
    $desconto_mercadoria = fgets(STDIN);
    
    $porcentagem_desconto = $desconto_mercadoria/100;
    $percentual = $preço_mercadoria* $porcentagem_desconto;
    $preço_novo = $preço_mercadoria -$percentual;

    print"O preço novo da mercadoria é de R$$preço_novo com um desconto de R$$percentual \n\n ";