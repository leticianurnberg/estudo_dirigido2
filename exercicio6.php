<?php

echo "Digite o primeiro número: ";
$n1 = (int) fgets(STDIN);

echo "Digite o segundo número: ";
$n2 = (int) fgets(STDIN);

echo "Digite o terceiro número: ";
$n3 = (int) fgets(STDIN);

if ($n1 >= $n2) {
    
    $maior = $n1;
}
else {
    $maior = $n2;
}
if ($maior <= $n3) {
    
    $maior = $n3;
}
echo "O maior número digitado foi: $maior";
