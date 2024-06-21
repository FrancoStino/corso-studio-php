<?php

/**
 * Esempio di come utilizzare le funzioni is_numeric(), is_float() e is_int()
 * per verificare il tipo di dato.
 */

$numero = 5.3;

// Verifica se il valore è un numero (float o int).
$test = is_numeric($numero);

// Verifica se il valore è un float.
$test = is_float($numero);

// Verifica se il valore è un intero.
$test = is_int($numero);

// Stampa il risultato della verifica.
var_dump($test);
