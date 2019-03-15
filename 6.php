<?php
    print"Digite a temperatura dem Celsius";
    $celsius = fgets(STDIN);

    $fahrenheit = (9 * $celsius ) / 5 + 32;

    print"A temperatura foi convertida para $fahrenheit F\n\n";