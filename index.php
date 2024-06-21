<?php

/**
 * Questo script mostra come si possono utilizzare le stringhe in PHP.
 *
 * In PHP le stringhe possono essere indicate con le virgolette doppie (") o 
 * singole ('). All'interno delle stringhe si può utilizzare anche il 
 * carattere di escape per le virgolette doppie (\") e per le virgolette singole
 * (\').
 *
 * Per includere una variabile all'interno di una stringa si può utilizzare la 
 * sintassi con punti di sospensione (.).
 */

// Definizione della variabile
$nome = "Mario";

// Stampa la stringa con la variabile inclusa
echo 'Ciao mi chiamo ' . $nome;
echo "Ciao mi chiamo $nome";

// Stampa la stringa con l'altro nome incluso
echo 'L\'altro nome è ' . $nome;

// Stampa la stringa con l'altro nome incluso e con l'uso di escape per le virgolette doppie
echo "L'altro \"nome\" è $nome";
