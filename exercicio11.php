<?php

echo "Informe um número menor que 1000: ";
$numero = (int) fgets(STDIN);

if ($numero < 1000) {
    $qnt_num = strlen($numero) ; # $strlen conta a quantidade de caracteres
    $centena = floor($numero / 100);
        $numero = $numero - ($centena * 100);
        $dezena = floor($numero/10);
        $numero = $numero - ($dezena * 10);
        if ($centena > 1) {
            $centena = $centena . " centenas";
        }
        else {
            $centena = $centena . " centena";
        }
        if ($dezena > 1) {
            $dezena = $dezena . " dezenas";
        }
        else {
            $dezena = $dezena . " dezena";
        }
        if ($numero > 1) {
            $numero = $numero . " unidades";
        }
        else {
            $numero = $numero . " unidade";
        }
    if ($qnt_num == 3) {
        echo "\nEsse número possui $centena, $dezena e $numero. \n\n";
        }
    elseif ($qnt_num == 2) {
        echo "\nEsse número possui $dezena e $numero. \n";
        }
    else {
        echo "\nEsse número possui $numero. \n";
        }
}
else {
        echo "\nNúmero informado é maior que 1000. Fim. \n";
    }
