<?php

echo "Digite o valor de a: ";
$a = (int) fgets(STDIN);

echo "Digite o valor de b: ";
$b = (int) fgets(STDIN);

echo "Digite o valor de c: ";
$c = (int) fgets(STDIN);

if ($a == 0) {
    echo "Equação inserida não é do segundo grau. Fim. \n";
    exit;
}
$delta = pow($b,2) - 4 * $a * $c;
if ($delta < 0) {
    echo "A equação não possui raizes iguais pois delta é negativo. Fim. \n";
}
if ($delta == 0) {
    $x = (-$b + sqrt($delta)) / (2*$a);
    echo "A equação possui uma raiz real no valor de: $x \n";
}
if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / 2*$a;
    $x2 = (-$b - sqrt($delta)) / 2*$a;
    echo "A equação possui duas raizes reais, que são: $x1 e $x2 \n";
}
