<?php

/**
 * Esempio di utilizzo delle funzioni in PHP.
 */

/**
 * Funzione `fn1`.
 *
 * La funzione `fn1` viene chiamata direttamente. La sua funzione è quella di
 * stampare un messaggio che indica che la funzione è stata eseguita.
 */
function fn1()
{
  echo "Funzione fn1 eseguita" . PHP_EOL;
}

// Chiamiamo la funzione `fn1`.
fn1();

/**
 * Funzione anonima eseguita direttamente.
 *
 * Questa funzione anonima viene immediatamente eseguita. La sua funzione è
 * quella di stampare un messaggio che indica che la funzione è stata eseguita.
 * Viene eseguita utilizzando la parentesi graffa `()`.
 */
(function () {
  echo "Funzione anonima eseguita" . PHP_EOL;
})();

/**
 * Funzione anonima con variabile.
 *
 * Questa funzione anonima viene assegnata a una variabile. Quindi, quando viene
 * chiamata la variabile, viene eseguita la funzione. La sua funzione è quella di
 * stampare un messaggio che indica che la funzione è stata eseguita.
 */
$nomeFunzione = function () {
  echo "Funzione anonima con variabile eseguita" . PHP_EOL;
};

// Chiamiamo la funzione anonima assegnata alla variabile `$nomeFunzione`.
$nomeFunzione();


/**
 * Funzione `fn2`.
 *
 * La funzione `fn2` viene chiamata passando due parametri: `$nome` e `$cognome`.
 * La sua funzione è quella di stampare i valori dei parametri.
 *
 * @param string $nome Nome del parametro.
 * @param string $cognome Cognome del parametro.
 */
function fn2($nome, $cognome)
{
  echo "Nome: $nome, Cognome: $cognome" . PHP_EOL;
}

// Chiamiamo la funzione `fn2`.
fn2("Mario", "Rossi");


/**
 * Funzione `fn3`.
 *
 * La funzione `fn3` viene chiamata passando due parametri: `$nome` e `$cognome`.
 * La sua funzione è quella di restituire una stringa che contiene i valori dei
 * parametri.
 *
 * @param string $nome Nome del parametro.
 * @param string $cognome Cognome del parametro.
 * @return string La stringa contenente i valori dei parametri.
 */
function fn3($nome, $cognome)
{
  return "Nome: $nome, Cognome: $cognome" . PHP_EOL;
}

// Chiamiamo la funzione `fn3` e le assegniamo il risultato in una variabile.
$nomeCognome = fn3("Mario", "Rossi");

// Stampiamo la variabile `$nomeCognome`.
echo $nomeCognome;

