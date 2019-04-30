<?php

echo "Informe um número: ";
$n1 = (int) fgets(STDIN);

echo "Informe outro número: ";
$n2 = (int) fgets(STDIN);

if ($n1 > $n2) {
    echo "O maior número é o: $n1.";
}
else {
    echo "O maior número é o: $n2 \n";
}
