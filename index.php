<?php

/**
 * Documentazione
 *
 * Questo script esegue due cicli while:
 * 1. Ciclo while per contare da 0 a 10
 * 2. Ciclo while per stampare gli elementi di un array, utilizzando array_pop
 *
 * @author <a href="mailto:andrea.rinaldi2@libero.it">Andrea Rinaldi</a>
 * @version 1.0
 */

// Ciclo while per contare da 0 a 10
$condizione = true;
$i          = 0;

while ($condizione) {
  if ($i <= 10) {
    echo $i++, ' ';
  } else {
    $condizione = false;
  }
}

echo "\n";

// Ciclo while per stampare gli elementi di un array, utilizzando array_pop
$alunni       = ['Marco', 'Simona', 'Andrea'];
$numeroAlunni = count($alunni);

$i = 0;

while ($alunno = array_pop($alunni)){
  echo $alunno, '<br>';
}
