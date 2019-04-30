<?php

echo "Digite o primeiro número: ";
$n1 = (int) fgets(STDIN);

echo "Digite o segundo número: ";
$n2 = (int) fgets(STDIN);

echo "Digite o terceiro número: ";
$n3 = (int) fgets(STDIN);

$numeros = ["$n1", "$n2", "$n3"];

rsort ($numeros);

print " $numeros[0] \n";
print " $numeros[1] \n";
print " $numeros[2] \n";
