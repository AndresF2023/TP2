<?php

#4. Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si
#es isoceles, escaleno o equilatero.

$ladoA = readline("Ingrese al lado A: ");
$ladoB = readline("Ingrese al lado B: ");
$ladoC = readline("Ingrese al lado C: ");

if ($ladoA==$ladoB&&$ladoA!=$ladoC or $ladoA==$ladoC&&$ladoA!=$ladoB){
        echo "Triangulo isosceles";
}
else if ($ladoA!=$ladoB&&$ladoA!=$ladoC){
    echo"Triangulo escaleno";
}
else if ($ladoA==$ladoB&&$ladoA==$ladoC){
    echo"Triangulo equilatero";
}

