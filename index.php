<?php

/**
 * Spaceship operator <=>
 *
 * Questo operatore viene utilizzato per confrontare due valori.
 * Restituisce:
 * - -1 se il primo valore è minore del secondo
 * - 0 se i due valori sono uguali
 * - 1 se il primo valore è maggiore del secondo
 */

$a = 10;
$b = 20;

var_dump($a <=> $b); // Restituisce -1

$a = 10;
$b = 10;

var_dump($a <=> $b); // Restituisce 0

$a = 20;
$b = 10;

var_dump($a <=> $b); // Restituisce 1

