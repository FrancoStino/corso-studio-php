<?php

/**
 * Funzione per mescolare le parole in una stringa.
 *
 * La funzione prende in input una stringa e la divide in un array di parole utilizzando la funzione explode(),
 * poi mescola le parole utilizzando la funzione shuffle() e infine le riunisce in un'unica stringa utilizzando la
 * funzione implode().
 *
 * @param string $str La stringa da mescolare.
 * @return void
 */

$str = "Spero che sia un buon corso di PHP";

// Divide la stringa in un array di parole
$arrayParole = explode(" ", $str);

// Mescola le parole nell'array
shuffle($arrayParole);

// Riunisce le parole nell'array in una stringa
$str = implode(" ", $arrayParole);

// Stampa la stringa mescolata
echo $str;

