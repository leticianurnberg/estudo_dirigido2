<?php

echo "Digite uma letra: ";
$letra = (string) fgetc(STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u" 
    or $letra == "A" or $letra == "E" or $letra == "I" or $letra == "O" or $letra == "U") {
    echo "\n A letra digitada é uma vogal \n \n";
}
else {
    echo "\n A letra digitada é uma consoante. \n \n ";
}
