<?php

#Quadrado
 for ($i=0; $i < 8 ; $i++) { 
     for ($h=0; $h < 8 ; $h++) { 
         echo "* ";
     }
     echo "\n";
 }
echo "\n";
#Triangulo
for ($i=0; $i < 8; $i++) {
     for($j=-1; $j < $i; $j++) {
         print "* ";
    }
print "\n";
}
print "\n";
#Triangulo espelhado
for ($i=0; $i<=8; $i++){ 
    
    for($h=0; $h<=8-$i; $h++){
        print "  ";
    }
    for($h=0; $h<$i; $h++){
        print "* ";
    }
    
    print "\n";
}
