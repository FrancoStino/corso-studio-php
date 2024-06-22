<?php

/**
 * Funzioni per la manipolazione di stringhe
 *
 * Questo file illustra alcune funzioni PHP per la manipolazione di stringhe.
 */

// Stampa il valore intero 2
print 2;

// Stampa il valore intero 2, la stringa "Corso PHP" e il valore intero 3
echo 2, "Corso PHP", 3;

// Esplode e implode
// La funzione explode divide una stringa in un array di stringhe utilizzando un delimitatore.
$nome = "Mario Rossi programmatore";

$nomi = explode(" ", $nome);
var_dump($nomi); // Array(3) { [0]=> string(5) "Mario" [1]=> string(6) "Rossi" [2]=> string(10) "programmatore" }

// La funzione implode riunisce un array di stringhe in una singola stringa, utilizzando un delimitatore.
$nome = implode(" ", $nomi);
var_dump($nome); // string(27) "Mario Rossi programmatore"

// addslashes
// La funzione addslashes aggiunge barre invertite (\) davanti a caratteri speciali (come ad esempio le virgolette) in una stringa.
$user = "Mario Rossi D'Elia";
echo addslashes($user); // Mario Rossi D\'Elia

// str_contains (PHP 8)
// La funzione str_contains verifica se una stringa contiene un altro sottostringa. Ritorna true se la sottostringa viene trovata, false altrimenti.
var_dump(str_contains("Mario Rossi", "Rossi")); // bool(true)

// str_starts_with
// La funzione str_starts_with verifica se una stringa inizia con un altro sottostringa. Ritorna true se la sottostringa viene trovata, false altrimenti.
var_dump(str_starts_with("Mario Rossi", "Mario")); // bool(true)

// str_ends_with
// La funzione str_ends_with verifica se una stringa termina con un altro sottostringa. Ritorna true se la sottostringa viene trovata, false altrimenti.
var_dump(str_ends_with("Mario Rossi", "Rossi")); // bool(true)

// trim, rtrim, ltrim
// La funzione trim rimuove i caratteri specificati da entrambe le estremità di una stringa.
// La funzione rtrim rimuove i caratteri specificati solo dalla parte destra di una stringa.
// La funzione ltrim rimuove i caratteri specificati solo dalla parte sinistra di una stringa.
$nome = ' /Mario Rossi/ ';

echo trim($nome, ' / '); // Mario Rossi

// lcfirst, ucfirst, ucwords
// La funzione lcfirst converte la prima lettera di una stringa in minuscolo.
// La funzione ucfirst converte la prima lettera di una stringa in maiuscolo.
// La funzione ucwords converte la prima lettera di ogni parola in maiuscolo in una stringa.
$nome = "mario Rossi";
echo lcfirst(ucfirst(ucwords($nome))); // Mario Rossi

// strtoupper, strtolower
// La funzione strtoupper converte tutte le lettere di una stringa in maiuscolo.
// La funzione strtolower converte tutte le lettere di una stringa in minuscolo.
$nome = "mario è Rossi";
echo strtoupper($nome); // MARIO È ROSSI
echo strtolower($nome); // mario è rossi

// mb_strtoupper, mb_strtolower
// Le funzioni mb_strtoupper e mb_strtolower sono simili alle funzioni strtoupper e strtolower, ma supportano anche caratteri multibyte.
$nome = "mario è Rossi";
echo mb_strtoupper($nome); // MARIO È ROSSI
echo mb_strtolower($nome); // mario è rossi
