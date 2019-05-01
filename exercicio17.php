<?php

echo "Informe a base da potência: ";
$base = (int) fgets(STDIN);

$valor_base = $base;

echo "Informe o expoente da potência: ";
$expoente = (int) fgets(STDIN);

if ($expoente == 1) {
    echo "A sua potência é igual a: $base";
}
elseif ($expoente == 0 ) {
    echo "A sua potência é igual a: 1";
}
else { 
    for ($i=1; $i < $expoente ; $i++) { 
        $potencia = $base*=$valor_base;
}
print "A sua potência é igual a: $potencia \n";
}
