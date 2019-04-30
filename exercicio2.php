<?php

echo "Informe um número: ";
$num = (int) fgets(STDIN);

if ($num > 0) {
    echo "O valor informado é positivo. \n";
}
if ($num == 0) {
    print "O valor informado é nulo. \n";
}
if ($num < 0) {
    print "O valor informado é negativo. \n";
}
