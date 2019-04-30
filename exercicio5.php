<?php

echo "Digite a primeira nota do aluno: \n";
$n1 = (int) fgets(STDIN);

echo "Digite a segunda nota do aluno: \n";
$n2 = (int) fgets(STDIN);

$media = ($n1 + $n2) / 2;
if ($media == 10) {
    echo "O aluno foi aprovado com distinção. ";
}
elseif ($media >= 7) {
    echo "O aluno foi aprovado. ";
}
else  {
    echo "O aluno foi reprovado. ";
}
