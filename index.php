<?php

/**
 * Introduzione agli array
 *
 * Questo esempio mostra come dichiarare e utilizzare gli array.
 * In primo luogo, si dichiara un array di nomi di alunni con la funzione count() per contare il numero di elementi.
 * Successivamente, si accede agli elementi dell'array utilizzando l'indice numerico.
 * Infine, si visualizza il contenuto dell'array con la funzione var_dump().
 */

$alunni = ["Mario", "Giulia", "Gianni", "Giovanni"];
$numeriAlunni = count($alunni);
echo $numeriAlunni; // visualizza il numero di alunni
echo $alunni[$numeriAlunni - 1]; // visualizza l'ultimo alunno
echo $alunni[1]; // visualizza il secondo alunno
var_dump($alunni); // visualizza il contenuto dell'array


/**
 * Array associativi
 *
 * In questo esempio, si mostra come dichiarare e utilizzare gli array associativi.
 * Si dichiara un array associativo con chiavi come "nome", "cognome" e "eta".
 * Successivamente, si visualizza il contenuto dell'array utilizzando la notazione a parentesi quadre.
 * Infine, si usa la funzione extract() per estrarre le chiavi dell'array in variabili locali.
 */

$user = [
  "nome" => "Mario",
  "cognome" => "Rossi",
  "eta" => 25,
  "cii" // chiave inesistente, viene ignorata
];

var_dump($user); // visualizza il contenuto dell'array

echo $user['nome'] . ' ' . $user['cognome'] . ' ha ' . $user['eta'] . ' anni'; // visualizza il nome, cognome e età dell'utente

echo "{$user['nome']} {$user['cognome']} ha {$user['eta']} anni"; // visualizza lo stesso risultato utilizzando la sintassi di interpolazione delle stringhe

// extract
extract($user); // estrae le chiavi dell'array in variabili locali
echo $nome . ' ' . $cognome . ' ha ' . $eta . ' anni'; // visualizza lo stesso risultato utilizzando le variabili locali

echo $nome . ' ' . $cognome . ' ha ' . $eta . ' anni';

