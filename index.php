<?php

// Questo è un esempio di utilizzo della funzione 'match' introdotta in PHP 8.
// La funzione 'match' permette di eseguire una serie di istruzioni in base a un valore specifico.
// In questo caso, viene verificato il valore di $errorCode e viene restituito un messaggio corrispondente.

$errorCode = 502; // Imposta il valore di $errorCode a 502

// Utilizzo della funzione 'match' per verificare il valore di $errorCode
// e restituire un messaggio corrispondente.
$msg = match($errorCode) {
  404 => 'Not Found', // Se $errorCode è uguale a 404, restituisce 'Not Found'
  500 => 'Internal Server Error', // Se $errorCode è uguale a 500, restituisce 'Internal Server Error'
  502 => 'Bad Gateway', // Se $errorCode è uguale a 502, restituisce 'Bad Gateway'
  default => 'Unknown Error', // Se $errorCode non corrisponde ad alcuna delle opzioni precedenti, restituisce 'Unknown Error'
};

echo $msg; // Stampa il messaggio corrispondente al valore di $errorCode
