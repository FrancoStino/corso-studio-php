<?php

/**
 * Esempio di precedenza tra operatori e short-circuit evaluation.
 *
 * L'operatore '&&' viene valutato da sinistra a destra. Se l'operando
 * a sinistra è falso, viene restituito subito falso, senza valutare l'operando
 * a destra. Altrimenti, viene valutato l'operando a destra.
 */

$testTrue = true;
$testFalse = false;

var_dump($testTrue and $testFalse); // bool(false)

/**
 * Esempio di funzione che viene solamente eseguita se l'operando
 * a sinistra è vero.
 */
function fn1()
{
  echo "Funzione " . __FUNCTION__ . " eseguita";
}

false && fn1(); // funzione non eseguita
true && fn1(); // funzione eseguita
