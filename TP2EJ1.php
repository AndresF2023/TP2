<?php

#1. Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.

$numero = readline("Ingrese un numero: ");

if($numero>0){
    echo"El numero es positivo";
    if(($numero%2)==0)
    {
        echo "Es par";
    }
    else {
        echo "Es impar";
    }
}
else if ($numero<0){
    echo "El numero es negativo";
    if(($numero%2)==0)
    {
        echo "Es par";
    }
    else {
        echo "Es impar";
    }
}
else if ($numero==0){
    echo"El numero es neutro, tampoco es par ni impar";
}