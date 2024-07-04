<?php

/**
 * Validazione delle variabili con `filter_var()`
 *
 * Questo script mostra come utilizzare la funzione `filter_var()` per
 * validare le variabili.
 *
 * La funzione `filter_var()` prende in input una variabile e la esegue
 * attraverso un filtro specificato. In questo caso viene utilizzato il
 * filtro `FILTER_VALIDATE_INT` per validare che una variabile sia un numero
 * intero.
 *
 * La funzione `filter_var()` restituisce il valore validato se la validazione
 * è andata a buon fine, altrimenti restituisce `false`.
 *
 * Per la validazione di un numero intero si può anche specificare dei
 * parametri di validazione utilizzando l'array `options`. In questo caso
 * viene utilizzato per specificare che il numero deve essere compreso tra 1
 * e 10.
 *
 * La funzione `filter_var()` può essere utilizzata anche per validare un
 * indirizzo email con il filtro `FILTER_VALIDATE_EMAIL`.
 */

// Validazione numero
$numero = "15";
$test = filter_var($numero, FILTER_VALIDATE_INT, [
  "options" => ["min_range" => 1, "max_range" => 10]
]);
var_dump($test);

// Validazione email

$email = "suka@gmail@gmail.com";
$email = "suka@gmail.com";

$test = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($test);
