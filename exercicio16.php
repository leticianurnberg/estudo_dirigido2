<?php

$soma = 0;

for ($i=1; $i <= 5 ; $i++) { 
    echo "Informe o $i ° número: ";
    $num = (int) fgets(STDIN);
    
    $soma = $soma + $num;
}
$media = $soma/5;
echo "A soma dos números é: $soma";
echo "A média dos números é: $media";
