<?php

echo "Qual o seu sexo? \n\n M - Masculino e F - Feminino \n\n ";
$sexo = (string) fgetc(STDIN);

if ($sexo == "M" or $sexo== "m") {
    echo "\n Você é do sexo Masculino. \n";
}
elseif ($sexo == "F" or $sexo == "f") {
    echo "\n Você é do sexo Feminino. \n ";
}
else {
    echo "\n Sexo inválido.\n\n";
}
