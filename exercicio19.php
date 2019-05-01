<?php

echo "Sequência de Fibonacci até o valor ser maior que 500: ";

$t1 = 0;
$t2 = 1;
$t3 = 1;
echo "$t1,$t2,";

while ($t3 <= 500) {
    $t3 = $t1 + $t2;
    $t1 = $t2; 
    $t2 = $t3; 
    
    echo "$t3,";
}
echo "\n";
