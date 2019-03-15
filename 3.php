<?php
    print"Digite o salário ";
    $salario = (float) fgets(STDIN);
    print"Digite a porcentagem do aumento";
    $porcentagem = (int) fgets(STDIN);

    $aumento = $porcentagem/100;
    $salario1 = $salario*$aumento;
    $salarionovo = $salario+$salario1;

    print"O salário novo dele é $salarionovo com um aumento de $porcentagem %";