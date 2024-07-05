<?php

/**
 * Stampa tutti gli argomenti passati alla funzione.
 *
 * @param mixed ...$valori Valori da stampare.
 * @return void
 */
function test(...$valori){
  foreach ($valori as $value) {
    echo $value . " ";
  }
  echo "\n";
}

// Chiama la funzione test con 5 argomenti
test(1, 2, 3, 4, 5);


/**
 * Calcola la somma di tutti gli argomenti passati alla funzione.
 *
 * @param int ...$numeri Valori da sommare.
 * @return int La somma dei valori passati.
 */
function somma(...$numeri){
  $somma = 0;
  foreach ($numeri as $numero) {
    $somma += $numero;
  }
  return $somma;
}

// Chiama la funzione somma con 5 argomenti
echo somma(1, 2, 3, 4, 5) . "\n";


/**
 * Stampa i primi due argomenti della funzione, poi tutti gli altri.
 *
 * @param mixed $a Primo argomento.
 * @param mixed $b Secondo argomento.
 * @param mixed ...$valori Valori da stampare.
 * @return void
 */
function somma2($a, $b, ...$valori)
{
  var_dump($a, $b, $valori);
}

// Chiama la funzione somma2 con 3 argomenti
echo somma2(1, 2, 3);

