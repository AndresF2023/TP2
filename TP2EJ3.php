<?php

#3. Ordenar en forma creciente tres valores diferentes A, B, C.

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$C = readline("Ingrese el valor de C: ");

if ($A > $B && $A > $C && $B > $C) {
    echo "A>B>C";
} else if ($A > $B && $A > $C && $C > $B) {
    echo "A>C>B";
} else if ($B > $A && $B > $C && $A > $C) {
    echo "B>A>C";
} else if ($B > $A && $B > $C && $C > $A) {
    echo "B>C>A";
} else if ($C > $A && $C > $B && $A > $B) {
    echo "C>A>B";
} else if ($C > $A && $C > $B && $B > $A) {
    echo "C>B>A";
}