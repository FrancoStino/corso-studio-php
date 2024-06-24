<?php

/**
 * In PHP, esistono diversi operatori di confronto che possono essere utilizzati per confrontare valori.
 * 
 * - '==': Confronto di uguaglianza. Restituisce true se i valori sono uguali dopo un'eventuale conversione dei tipi.
 * - '===': Confronto di identità. Restituisce true se i valori sono uguali e hanno lo stesso tipo.
 * - '!=': Confronto di disuguaglianza. Restituisce true se i valori sono diversi.
 * - '!==': Confronto di disuguaglianza di tipo. Restituisce true se i valori sono diversi o se hanno tipi diversi.
 * - '<': Confronto minore. Restituisce true se il valore di sinistra è minore del valore di destra.
 * - '<=': Confronto minore o uguale. Restituisce true se il valore di sinistra è minore o uguale al valore di destra.
 * - '>': Confronto maggiore. Restituisce true se il valore di sinistra è maggiore del valore di destra.
 * - '>=': Confronto maggiore o uguale. Restituisce true se il valore di sinistra è maggiore o uguale al valore di destra.
 * 
 * In questo script, viene eseguito un confronto tra vari valori utilizzando questi operatori.
 */

$a = 10;
$b = 20;

// Operatori di confronto

var_dump($a == $b); // restituisce false
var_dump($a === $b); // restituisce false
var_dump($a != $b); // restituisce true

echo '// -------------' . PHP_EOL;

$c = '10';
var_dump($a == $c); // restituisce true poiché i valori sono uguali dopo una conversione del tipo stringa a intero
var_dump($a === $c); // restituisce false poiché i valori hanno diversi tipi (intero e stringa)
var_dump($a != $c); // restituisce false poiché i valori sono uguali dopo una conversione del tipo stringa a intero
var_dump($a !== $c); // restituisce true poiché i valori sono diversi poiché hanno diversi tipi (intero e stringa)

echo '// -------------' . PHP_EOL;

$d = (int) $c;
var_dump($a == $d); // restituisce true poiché i valori sono uguali dopo una conversione del tipo stringa a intero
var_dump($a === $d); // restituisce true poiché i valori sono uguali e hanno lo stesso tipo (entrambi sono interi)
var_dump($a != $d); // restituisce false poiché i valori sono uguali dopo una conversione del tipo stringa a intero
var_dump($a !== $d); // restituisce false poiché i valori sono uguali e hanno lo stesso tipo (entrambi sono interi)

echo '// -------------' . PHP_EOL;

$e = "12";
var_dump($a < $e); // restituisce true poiché il valore di $a (10) è minore del valore di $e (12)
var_dump($a <= $e); // restituisce true poiché il valore di $a (10) è minore o uguale al valore di $e (12)
var_dump($a > $e); // restituisce false poiché il valore di $a (10) non è maggiore del valore di $e (12)
var_dump($a >= $e); // restituisce false poiché il valore di $a (10) non è maggiore o uguale al valore di $e (12)

echo '// -------------' . PHP_EOL;

var_dump($a <> $e); // restituisce true poiché i valori sono diversi (10 e 12)
var_dump($a != $e); // restituisce true poiché i valori sono diversi (10 e 12)

echo '// -------------' . PHP_EOL;


$suka = 10;
$suka2 = $suka + 1;
var_dump($suka <> $suka2); // restituisce true poiché i valori sono diversi (10 e 11)

echo '// -------------' . PHP_EOL;

$prova = 20;
$prova2 = 20;
$prova3 = '20';

var_dump($prova <> $prova2); // restituisce false poiché i valori sono uguali

var_dump($prova <> $prova3); // restituisce false poiché i valori sono uguali dopo una conversione del tipo stringa a intero