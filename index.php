<?php

/**
 * Type casting: conversione di un tipo di dato in un altro tipo di dato
 *
 * PHP offre diverse funzioni di type casting:
 * - int: conversione in integer
 * - bool: conversione in booleano
 * - float: conversione in floating point number
 * - string: conversione in stringa
 * - array: conversione in array
 * - object: conversione in oggetto
 */

// Esempio di casting da stringa a intero
$stringa = "22";

$intero = (int)$stringa;

var_dump($intero); // Output: int(22)


// Esempio di casting da booleano a intero
$booleano = true;

$intero_bool = (int) $booleano;

var_dump($intero_bool); // Output: int(1)


/* -------------------------------------------------------------------------- */

// Esempio di casting da intero a array
$numero = 30;

$array = (array) $numero;

var_dump($array); // Output: array(1) { [0]=> int(30) }

/* -------------------------------------------------------------------------- */

// Esempio di casting da array a oggetto
$array = [1, 'Corso PHP', true];

$oggetto = (object) $array;

var_dump($oggetto); // Output: object(stdClass)#1 (3) { [0]=> int(1) [1]=> string(10) "Corso PHP" [2]=> bool(true) }

var_dump($oggetto);
