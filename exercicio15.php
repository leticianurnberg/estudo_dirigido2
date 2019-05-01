<?php

$maior = 0;

for ($i=1; $i <= 5 ; $i++) { 
    echo "Informe o $i ° número: ";
    $num = (int) fgets(STDIN);
    
    if ($num > $maior) {
        $maior = $num;
    }
}
echo "O maior número digitado foi: $maior ";
