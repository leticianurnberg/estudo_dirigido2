<?php

echo "Informe o preço do primeiro produto: ";
$produto1 = (float) fgets(STDIN);

echo "Informe o preço do segundo produto: ";
$produto2 = (float) fgets(STDIN);

echo "Informe o preço do terceiro produto: ";
$produto3 = (float) fgets(STDIN);


if ($produto1 <= $produto2) {
    
    $barato = $produto1;
}
else {
    $barato = $produto2;
}
if ($barato >= $produto3) {
    
    $barato = $produto3;
}
echo "\nO produto que você deve comprar é o que custa: R$ $barato.";
