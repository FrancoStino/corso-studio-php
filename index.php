<?php

// Arrow function (PHP 7.4)

// Ordina l'array $a in ordine decrescente
$a = array( 3, 2, 5, 6, 1, 3 );

usort( $a, function ($a1, $a2) {
  return $a2 <=> $a1;
} );

// Stampa l'array ordinato
print_r( $a );

// Arrow function (non è necessario usare il return)

// Ordina l'array $a in ordine decrescente
$a = array( 1, 2, 3, 4, 5, 6 );

usort( $a, fn( $a1, $a2 ) => $a2 <=> $a1 );

print_r( $a );

/* -------------------------------------------------------------------------- */

// use: permette di accedere alle variabili esterne all'interno di una funzione
$b = 20;

// Creazione di una funzione anonima che somma il parametro $a alla variabile $b
$anonima1 = function ($a) use ($b) {
  return $a + $b;
};

// Chiamata della funzione anonima
echo $anonima1( 10 ) . "\n";

// Creazione di una funzione anonima che somma il parametro $a alla variabile $b
$anonima2 = fn( $a ) => $a + $b;

// Chiamata della funzione anonima
echo $anonima2( 10 );
