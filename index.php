<?php

// Operatori su array

// === stesse chiavi e stessi valori (confronto stretta uguaglianza. L'ordine dell'array è importante)
// Ad esempio, se ho un array con una sola chiave, la confronto con un array con la stessa chiave e lo stesso valore
// il risultato è true, se invece ho un array con una sola chiave e un altro array con una chiave diversa, lo stesso valore
// il risultato è false
$a = [1];
$b = ["1"];

var_dump($a === $b); // false


$c = ["valore1" => 1];
$d = ["valore2" => "1"];

var_dump($c === $d); // false


// == stesse chiavi e stessi valori (confronto semplice uguaglianza. L'ordine dell'array non importa)
// Ad esempio, se ho un array con una sola chiave, la confronto con un array con la stessa chiave e lo stesso valore
// il risultato è true, se invece ho un array con una sola chiave e un altro array con una chiave diversa, lo stesso valore
// il risultato è true. L'ordine degli elementi non conta

$e = ["valore2" => 3, "valore1" => 1];
$d = ["valore1" => 1, "valore2" => 2];

var_dump($e == $d); // true


// + Unione di array
// Se ho due array, unione semplice (se le chiavi sono diverse) o sovrascritura (se le chiavi sono uguali)

$f = ["pizzaPreferita" => "Margherita", 28 ];
$g = ["pizzaPreferita" => "Capricciosa", 30, 'php' ];
$h = $f + $g;

var_dump($h); // ["pizzaPreferita" => "Capricciosa", 28, 30, 'php']
